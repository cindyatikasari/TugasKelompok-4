<?php
	include "koneksi.php";

	/* simpan ke database */
	$email  = $_POST['email'];
	$id  = $_POST['id'];
	$komentar  = $_POST['komentar'];
	
	$query = "INSERT INTO komentar (email, id, komentar, date) VALUES ('$email', '$id', '$komentar', '$date');";
	$rows = $koneksi->query($query);

	header("location: about.php");
?>