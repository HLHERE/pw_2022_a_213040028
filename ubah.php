<?php
session_start();

if( ! isset ($_SESSION["login"])) {
header("location: login.php");

exit;
}

require "functions.php";
// tombol di klik 
// query data mahasiswa berdasarkan id 
$id = $_GET["id"];

$hl = query("SELECT * FROM hospital_info WHERE id = $id")[0];


// tombol di klik 
if (isset($_POST["ubah"]))    {
    // jalankan fungsi tambah 

    if (ubah($_POST) > 0)  {
        echo "<script>
        alert ('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style3.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ubah data Ambulance </title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #F52F04;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Playlist hospital</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Kembali</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
    <div class="container" style="padding-top: 100px; padding-bottom: 200px;">
        <h1 style="text-align: center;">form ubah data ambulance </h1>
<div class="row justify-content-center" mt-3 >
    <div class="col-8">
<form action="" method="post" autocomplete="off" enctype="multipart/form-data" >
<input type="hidden" name="id" value="<?= $hl ["id"] ?>">
<input type="hidden" name="gambarlama" value="<?= $hl ["Gambar"] ?>">
  <div class="mb-3">
    <label for="Ambulance" class="form-label">Ambulance</label>
    <input type="text" class="form-control" id="Ambulance" name="Ambulance" value= "<?= $hl["Ambulance"]?>" required >
  </div>
  <div class="mb-3">
    <label for="Domisili" class="form-label">Domisili</label>
    <input type="text" class="form-control" id="Domisili" name="Domisili" value="<?= $hl["Domisili"]?>" required>
  </div>
  <div class="mb-3">
    <label for="Tempat" class="form-label">Tempat</label>
    <input type="text" class="form-control" id="Tempat" name="Tempat" value="<?= $hl["Tempat"]?>" required >
  </div>
  <div class="mb-3">
      <img src="img/<?= $hl['Gambar']; ?>" width="250px">
    <label for="Images" class="form-label">Gambar</label>
    <input type="file" class="form-control" id="Gambar" name="Gambar" value="<?= $hl["Gambar"]?>" required >


    <button type="submit" class="btn btn-danger" name="ubah" style="margin-top: 30px;">Ubah data Ambulance </button>
    <a href="index.php" class ="btn btn-danger" style="margin-top: 30px;">kembali
        </a>
  </div>
</form>
</div>
</div> 
</div>

<div class="container-fluid" style="background-color:#ff0000 ; color: #ffff;" >
        <div class="row">
          <div class="col-md-6" style="padding-left: 50px; padding-top: 60px;">
            <h4 class="text-uppercase fw-bold">About</h4>
            <p class="text-lowercase">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Deleniti minus provident commodi nihil? Adipisci, expedita? Praesentium amet possimus neque quaerat accusantium, officiis ipsa inventore harum et, aliquid enim eligendi quas.</p>
          </div>
          <div class="col-md-6 text-center" style="padding-left: 200px; padding-top: 20px;">
           <img src="img/Playlist Hospital (2) (1).png" alt="">
          </div>
        </div>
        <footer class="text-center" style="padding: 100px">
          <p>Made by <u class="fw-bold" href=" ">HL</u></p>
        </footer>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>