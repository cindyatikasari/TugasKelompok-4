<?php

	$server   = "localhost";
	$database = "5-in-1-delivery";
	$username = "root";
	$password = "";

	$koneksi = new mysqli ($server, $username, $password, $database);

	if($koneksi->connect_error){
		die("Koneksi gagal");
	}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 8350d15b75e9ad8d2343f2fa59269972e4ad55f5
