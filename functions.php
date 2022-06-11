<?php


function koneksi() {
    $con = mysqli_connect("localhost","root","","pw2022_a_213040028") or die("koneksi gagal");
    return $con;
}



function query($query) {
    $con = koneksi();
    $result = mysqli_query($con, $query) or die (mysqli_error($con));

    $rows =[];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data) {
    $con = koneksi();

    $Images = upload ();
    if (!$Images ) {
         return false;
    }
    $Ambulance =htmlspecialchars( $data["Ambulance"]);
    $Domisili =htmlspecialchars( $data["Domisili"]);
    $Tempat =htmlspecialchars( $data["Tempat"]);

    $query = "INSERT INTO hospital_info VALUES (null, '$Images', '$Ambulance', '$Domisili', '$Tempat')";

    mysqli_query($con, $query) or die (mysqli_error($con));

    return mysqli_affected_rows ($con);
}

function hapus ($id) {

$con = koneksi();

mysqli_query($con,  "DELETE FROM hospital_info WHERE id = $id") or die (mysqli_error($con)); 

return mysqli_affected_rows($con);


}

function ubah ($data) {
    $con = koneksi();
    $id= $data["id"];
    $gambarlama=($data["gambarlama"]);
    if ($_FILES['Gambar']['error'] === 4) {
        $Gambar = $gambarlama;
    } else {
        $Gambar = upload();
    }

    $Ambulance =htmlspecialchars( $data["Ambulance"]);
    $Domisili =htmlspecialchars( $data["Domisili"]);
    $Tempat =htmlspecialchars( $data["Tempat"]);
    
    $query = "UPDATE hospital_info SET 
                    Gambar = '$Gambar', 
                    Ambulance = '$Ambulance',
                    Domisili = '$Domisili' ,
                    Tempat ='$Tempat'
                WHERE id = $id
                ";

    mysqli_query($con, $query) or die (mysqli_error($con));

    return mysqli_affected_rows ($con);


}
function cari($keyword){
    $query ="SELECT * FROM hospital_info
            WHERE 
            Ambulance LIKE '%$keyword%' OR
            Domisili LIKE '%$keyword%' OR 
            Tempat LIKE '%$keyword%'
    ";
    return query($query);
}
 
function upload () { 
    $namaFile = $_FILES ['Gambar']['name'];
    $ukuranfile = $_FILES ['Gambar'] ['size'];
    $error = $_FILES ['Gambar']['error'];
    $tmpName= $_FILES['Gambar']['tmp_name']; 
    

    if ($error == 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu');
        
        </script>";
        return false;

    }
    $ektensigambarvalid = ['jpg','jpeg','png'];
    $ektensigambar = explode('.',$namaFile);
    $ektensigambar = strtolower(end($ektensigambar));
    if( !in_array($ektensigambar , $ektensigambarvalid)){
        echo "<script>
        alert('upload file gambar!');
        
        </script>";
        return false;
    }
     if($ukuranfile >1000000) {

        echo "<script>
        alert('file gambar terlalu besar');
        
        </script>";
        return false;
     }
     $berkasbaru = uniqid();
     $berkasbaru .= '.';
     $berkasbaru .= $ektensigambar;
     move_uploaded_file($tmpName, 'img/'. $berkasbaru);

     return $berkasbaru;
}

function registrasi ($data){
    $con = koneksi();

    $username =  strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($con, $data["password"]);
    $password2 = mysqli_real_escape_string($con, $data["password2"]);

    $result = mysqli_query($con, "SELECT username FROM users WHERE username ='$username'");

    if( mysqli_fetch_assoc($result)) {
        echo "<script>
        
        alert('username sudah ada!!');
        
        
        </script>";
        return false;
    }
 

    // cek recek 

    if($password !== $password2) {
        echo "<script>
        alert ('password tidak sesuai!');
        </script>";
        return false;
    }


// pass
    $password = password_hash($password, PASSWORD_DEFAULT);
// insert 
    mysqli_query($con, "INSERT INTO users VALUES ('','$username', '$password')");

    return mysqli_affected_rows($con);

}


?>