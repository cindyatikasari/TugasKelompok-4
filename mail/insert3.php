<?php
	include "koneksi.php";

	/* simpan ke database */
	$nama  = $_POST['nama'];
	$email  = $_POST['email'];
	$no_hp  = $_POST['no_hp'];
	$subjek  = $_POST['subjek'];
	$pesan  = $_POST['pesan'];
	
	$query = "INSERT INTO email (nama, email, no_hp, subjek, pesan) VALUES ('$nama', '$email', '$no_hp', '$subjek', '$pesan');";
	$rows = $koneksi->query($query);
	if ($rows >= 1) {
			$error="Anda telah terdaftar";
	}
	header("location: mail.html");
?>