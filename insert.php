<?php
	include "koneksi.php";

	/* simpan ke database */
	$email  = $_POST['email'];
	$nama_barang  = $_POST['nama_barang'];
	$komentar  = $_POST['komentar'];
	
	$query = "INSERT INTO komentar (email, nama_barang, komentar) VALUES ('$email', '$nama_barang', '$komentar');";
	$rows = $koneksi->query($query);

	header("location: about.html");
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 125af962cb23d7b39777ccd32bf0b43ed841a27b
