<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
    $database = "praktikumdb";

	$connect = mysqli_connect($namaHost, $username, $password , $database);
	
	if ($connect){
		echo "Koneksi dengan MYSQL berhasil <br>";
	}
	else{
		echo "Koneksi dengan MYSQL gagal <br>" . mysqli_connect_error();
    }
    
    $sql = "INSERT INTO mahasiswa(id, nama, alamat)
            VALUES('0001', 'George' , 'Malang'), ('0002', 'Charlotte', 'Malang'), ('003', 'Louis', 'Surabaya')";

    if(mysqli_query($connect, $sql)){
        echo "Record berhasil ditambahkan";
    }
    else{
        echo "Record gagal ditambahkan <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>
