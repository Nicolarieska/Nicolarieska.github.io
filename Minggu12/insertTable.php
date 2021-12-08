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
    
    $sql = "INSERT INTO anggota(username,nama,alamat,email,no_hp,pass) 
    values('fifirofiqoh28','Rofiqoh Wahyuningtyas','Mondoroko Gg.01','rofiqohwahyuningtyas@gmail.com','08123521689','fifi1234')";

    if(mysqli_query($connect, $sql)){
        echo "Record berhasil ditambahkan";
    }
    else{
        echo "Record gagal ditambahkan <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>
