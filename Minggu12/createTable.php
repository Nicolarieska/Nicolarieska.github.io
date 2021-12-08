<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
    $database = "tugas12";

	$connect = mysqli_connect($namaHost, $username, $password , $database);
	
	if ($connect){
		echo "Koneksi dengan MYSQL berhasil <br>";
	}
	else{
		echo "Koneksi dengan MYSQL gagal <br>" . mysqli_connect_error();
	}
	$sql = "CREATE TABLE anggota(
            id_anggota int not null auto_increment primary key,
            username varchar(30) not null,
            nama varchar(50),
            alamat varchar(50),
            email varchar(30),
            no_hp char(13),
            pass varchar(200))";

    if(mysqli_query($connect, $sql)) {
        echo "Tabel Mahasiswa berhasil dibuat";
    }
    else{
        echo "Tabel Mahasiswa gagal dibuat <br>" .mysqli_error($connect);
    }

    mysqli_close($connect);
?>