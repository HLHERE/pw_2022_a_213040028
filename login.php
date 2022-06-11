<?php 
session_start();
require 'functions.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id =$_COOKIE['id'];
    $key = $_COOKIE['key'];

    // username
    $result = mysqli_query(mysqli_connect("localhost","root","","pw2022_a_213040028"),"SELECT username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);


    // cek cookie dan username
    if($key === hash('sha256', $row['username'])) {

        $_SESSION['login'] = true; 
    }
}

if(isset($_SESSION["login"])){
    header("location: index.php");
    exit;
}


if(isset($_POST ["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $con = koneksi(); 
    $result = mysqli_query($con, "SELECT * FROM users WHERE
            username = '$username'");

    // cek 
    if ( mysqli_num_rows($result) === 1 )  {

        // cek password 

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password , $row ["password"])){
            
            // cek remember 
            if( isset ($_POST['remember'])) {
// cookie

                setcookie('id' , $row['id'], time()+ 60);
                setcookie('key', hash('sha256' , $row['username']), time() + 60);
            }






            // set
            $_SESSION["login"] = true;

            header('location: index.php');
            exit;
        }

    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body style="background-color: #ff0000;">
<?php  if(isset($error)) :  ?>
<p style="color: red; font-style : italic ;" >username / password salah </p>
<?php endif; ?>
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                <div class="form-container">
                    <form class="form-horizontal" action="" method="post">
                        <h3 class="title">Selamat datang. </h3>
                        <span class="description">Di website playlist hospital </span>
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" id="username" placeholder="Enter your Username">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" id="password" placeholder="Enter your Password">
                        </div>
                        <button class="btn signin" type="submit" name="login">Login</button>
                        <a class="btn signin" type="submit" name="registrasi" id="registrasi" href="registrasi.php"
                        >Regist</a>
                        <label for="remember text-center">remember me :</label>
                        <input type="checkbox" name="remember" id="remember">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>