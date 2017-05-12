<?php
	include "koneksi.php";

	/* simpan ke database */
	$nama_depan  = $_POST['nama_depan'];
	$nama_belakang  = $_POST['nama_belakang'];
	$email  = $_POST['email'];
	$password = $_POST['password'];
	$tgl_lahir  = $_POST['tgl_lahir'];
	$gender  = $_POST['gender'];
	$lokasi_pasar = $_POST['lokasi_pasar'];
	$status = $_POST['status'];
	
	$query = "INSERT INTO user (nama_depan, nama_belakang, email, password, tgl_lahir, gender, lokasi_pasar, status ) VALUES ('$nama_depan', '$nama_belakang', '$email', '$password', $tgl_lahir', '$gender', '$lokasi_pasar', '$status');";
	$rows = $koneksi->query($query);
	if ($rows >= 1) {
			$error="Username telah terdaftar";
	}
	header("location: account.php");
?>