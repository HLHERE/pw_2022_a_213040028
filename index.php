<?php
session_start();

if( !isset ($_SESSION["login"])) {
header("location: login.php");

exit;
}


require 'functions.php';
$hospital = query ("SELECT * FROM hospital_info");
// button cari 
if(isset($_POST["cari"])){
  $hospital= cari($_POST["keyword"]);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>hospital</title>
  </head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-dark shadow-lg" style="background-color: #ff0000;">
  <div class="container-fluid">
    <h4 class="navbar-brand" href="#">Playlist hospital</h4>
    <button class="navbar-toggler" type="text" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bolder" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffff;">
            Layanan kami 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tambah.php">tambah data ambulance</a></li>
            <li><a class="dropdown-item" href="cetak.php">Cetak</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Logout??</a></li>
          </ul>
        </li>
      </ul>
      <?php require 'sorting.php';?>
      <form action="" method="post"autofocus class="d-flex ms-3">
        <input type="text" class="form-control me-2"  placeholder="cari ambulance..." name="keyword" autocomplete="off" id="keyword"> 
      </form>
    </div>
  </div>
</nav>
<div class="caps">
<h1 class="fw-bolder text-wrap">The emergency ambulance </h1>
<p> website yang bertujuan untuk menampilkan data ambulance yang beredar di bandung  </p>
</div>



  <div id="searching">
    <div class="row text-center">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Ambulance</th>
      <th scope="col">Domisili</th>
      <th scope="col">Tempat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
  <?php foreach($hospital as $hl) {?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td>
      <img src="img/<?php echo $hl["Gambar"]?>" width=150>
      </td>
      <td><?php echo $hl["Ambulance"]?></td>
      <td><?php echo $hl["Domisili"]?></td>
      <td><?php echo $hl["Tempat"]?></td>
      <td>
          <a href="ubah.php?id=<?php echo $hl["id"]?>" class="btn badge bg-warning">Ubah</a>
          <a href="hapus.php?id=<?php echo $hl["id"]?>" class="btn badge bg-danger" onclick="return confirm('Ingin tetap menghapus data?');">Hapus</a>
        </td>
    </tr>
    <?php }?>
  </tbody>
</table>
    </div>
  </div>
      <!-- Site footer -->
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
    <script src="js/script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>