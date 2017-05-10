<?php
	include "koneksi.php";

	/* simpan ke database */
	$nama  = $_POST['nama'];
	$no_hp  = $_POST['no_hp'];
	$alamat  = $_POST['alamat'];
	$tgl_pemesanan  = $_POST['tgl_pemesanan'];
	
	$query = "INSERT INTO pelanggan (nama, no_hp, alamat, tgl_pemesanan) VALUES ('$nama', '$no_hp', '$alamat', '$tgl_pemesanan');";
	$rows = $koneksi->query($query);
	if ($rows >= 1) {
			$error="Username telah terdaftar";
	}
	header("location: pesan.php");
?>