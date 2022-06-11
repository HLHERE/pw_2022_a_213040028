<?php
require 'functions.php';

if(isset($_POST["register"])) {

    if( registrasi ($_POST) > 0) {
        echo "<script>
        alert ('user baru berhasil ditambahkan!');
        
        
        </script>";
    } else {
        echo "gagal";
            header('location:registrasi.php');
    }
}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
<style>

    label {
        display: block;
    }

</style>
</head>
<body>

    <div class="content" style="padding-top: 100px; padding-bottom: 200px; background-color: #ff0000;">
        <h1 class="fw-bold" style="text-align: center; color: #ffff;">REGIST USER</h1>
<div class="row justify-content-center" mt-3>
    <div class="col-8">
<form action="" method="post" autocomplete="off" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="username" class="fw-bold form-label" style="color:#ffff;">Username  : </label>
    <input type="text" class="form-control" id="username" name="username" required >
  </div>
  <div class="mb-3">
    <label for="password" class="fw-bold form-label" style="color:#ffff;">Password  : </label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="mb-3">
    <label for="password2" class="fw-bold form-label" style="color:#ffff;">Konfrimasi password  : </label>
    <input type="password" class="form-control" id="password2" name="password2" required >
  </div>
    <button type="submit" class="btn btn-danger btn-lg" name="register" style="margin-top: 35px; margin-left: 400px;">Regist! </button>
  </div>
</form>
</div>
</div> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>