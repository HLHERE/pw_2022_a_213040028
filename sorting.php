
<?php 
if (isset($_POST["Ambulance_naik"])) {
    $hospital = query("SELECT * FROM hospital_info ORDER BY Ambulance ASC;");
 }

if (isset($_POST["Domisili_naik"])) {
    $hospital = query("SELECT * FROM hospital_info ORDER BY Domisili ASC;");
 } 

if (isset($_POST["Tempat_naik"])) {
    $hospital = query("SELECT * FROM hospital_info ORDER BY Tempat ASC;");
 } 


if (isset($_POST["Ambulance_turun"])) {
    $hospital = query("SELECT * FROM hospital_info ORDER BY Ambulance DESC;");
 }

if (isset($_POST["Domisili_turun"])) {
    $hospital = query("SELECT * FROM hospital_info ORDER BY Domisili DESC;");
 } 

if (isset($_POST["Tempat_turun"])) {
    $hospital = query("SELECT * FROM hospital_info ORDER BY Tempat DESC;");
 } 

?>


<form action="" method="POST">
    <div class="container-urutan">
        <div class="col d-inline-flex">
         <div class="input-group me-3">
             <button class="btn btn dropdown-toggle" style="background-color:#ffff ;" type="button" data-bs-toggle="dropdown" aria-expanded="false">urut naik</button>
                <ul class="dropdown-menu" style="background-color:#ffff ;">
                    <li><button class="dropdown-item" name="Ambulance_naik" type="submit">Ambulance</button></li>
                    <li><button class="dropdown-item" name="Domisili_naik" type="submit">Domisili</button></li>
                    <li><button class="dropdown-item" name="Tempat_naik" type="submit">Tempat</button></li>
                </ul>
         </div>
         <div class="input-group">
             <button class="btn btn-outline dropdown-toggle" style="background-color:#ffff ;" type="button" data-bs-toggle="dropdown" aria-expanded="false">urut bawah</button>
                <ul class="dropdown-menu" style="background-color:#ffff ;">
                    <li><button class="dropdown-item" name="Ambulance_turun" type="submit">Ambulance</button></li>
                    <li><button class="dropdown-item" name="Domisili_turun" type="submit">Domisili</button></li>
                    <li><button class="dropdown-item" name="Tempat_turun" type="submit">Tempat</button></li>
                </ul>
         </div>
      </div>
 </div>
 </form>