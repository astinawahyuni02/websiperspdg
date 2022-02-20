<?php
 
//Variabel database
    $servername = "54.208.203.255";
    $username = "admin";
    $password = "12345678";
    $dbname = "database-siperspdg";
 
	$koneksi = mysqli_connect($servername, $username, $password, $dbname); // menggunakan mysqli_connect
 
	if(mysqli_connect_errno()){ // mengecek apakah koneksi database error
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
	}
?>
