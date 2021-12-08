<?php
include "koneksi.php";
$username=$_POST['username'];
$password=md5($_POST['password']);

$query="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

if($row['level'] == 1) {
    echo "Anda berhasil Login. Silahkan menuju" ; ?>
    <a href="homeAdmin.html">Halaman HOME</a>
    <?php
} else if ($row['level']==2) {
    echo "Anda berhasil login.silahkan menuju"; ?>
    <a href="HomeGuest.html">Halaman HOME</a>
    <?php
}else{
    echo"Anda gagal Login.Silahkan" ; ?>
    <a href="LoginForm.html">Login Kembali</a>
    <?php
    echo mysqli_error($connect);
}