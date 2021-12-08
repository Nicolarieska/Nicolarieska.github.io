<?php
    include "koneksi.php";

    $username=$_GET["username"];
    $nama=$_GET["nama"];
    $alamat=$_GET["alamat"];
    $email=$_GET["email"];
    $no_hp=$_GET["no_hp"];
    $password=$_GET["password"];

    $query = "UPDATE anggota SET nama='$nama' , alamat='$alamat', email='$email' , no_hp='$no_hp' , password='$password' WHERE username='$username'";

    $result = mysqli_query($connect,$query);

    if($result){
        echo "Berhasil update data ke database";
?>
    <a href="homeCRUD.php"> Lihat data di Tabel </a>
<?php
    }
    else{
        echo "Gagal update data" . mysqli_error($connect);
    }
?>
