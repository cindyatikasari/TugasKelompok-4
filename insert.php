<?php
	include "koneksi.php";

	/* simpan ke database */
	$email  = $_POST['email'];
	$nama_barang  = $_POST['nama_barang'];
	$komentar  = $_POST['komentar'];
	
	$query = "INSERT INTO komentar (email, nama_barang, komentar) VALUES ('$email', '$nama_barang', '$komentar');";
	$rows = $koneksi->query($query);
	if ($rows >= 1) {
			$error="Username telah terdaftar";
	}
	header("location: tes.php");
?>