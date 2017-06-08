<?php
	include "koneksi.php";

	/* simpan ke database */
	$email  = $_POST['email'];
	$komentar  = $_POST['komentar'];
	$date  = date("d-m-Y H:i:s");
	
	$query = "INSERT INTO komentar (email,komentar, date) VALUES ('$email','$komentar','$date')";
	$rows = $koneksi->query($query);

	header("location: about.php");
?>