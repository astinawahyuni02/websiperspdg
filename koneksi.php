<?php
 
//Variabel database
    $servername = "database-siperspdg.crb4qur1hich.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "12345678";
    $dbname = "database-siperspdg";
 
	$koneksi = mysqli_connect($servername, $username, $password, $dbname); // menggunakan mysqli_connect
 
	if(mysqli_connect_errno()){ // mengecek apakah koneksi database error
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
	}
?>
