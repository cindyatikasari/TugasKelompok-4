<?php

	$server   = "localhost";
	$database = "hargaBarang";
	$username = "root";
	$password = "";

	$koneksi = new mysqli ($server, $username, $password, $database);

	if($koneksi->connect_error){
		die("Koneksi gagal");
	}
?>