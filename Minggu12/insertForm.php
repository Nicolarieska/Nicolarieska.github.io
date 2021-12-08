<?php
    include "koneksi.php";
    $username=$_GET["username"];
    $nama=$_GET["nama"];
    $alamat=$_GET["alamat"];
    $email=$_GET["email"];
    $no_hp=$_GET["no_hp"];
    $password=$_GET["password"]; //untuk password digunakan enskripsi md5

  $sql="insert into anggota (username,nama,alamat,email,no_hp,pass) values
		('$username','$nama','$alamat','$email','$no_hp','$password')";

    if(mysqli_query($connect, $sql)){
        echo "Record berhasil ditambahkan";
    }
    else{
        echo "Recors gagal ditambahkan <br>" . mysqli_error($connect);
    }
    
    mysqli_close($connect);
?>