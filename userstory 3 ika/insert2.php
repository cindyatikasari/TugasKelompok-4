<?php
	include "koneksi.php";

	/* simpan ke database */
	$nama  = $_POST['nama'];
	$no_hp  = $_POST['no_hp'];
	$alamat  = $_POST['alamat'];
	$tgl_pemesanan  = $_POST['tgl_pemesanan'];
	$pembayaran  = $_POST['pembayaran'];
	
	$query = "INSERT INTO pelanggan (nama, no_hp, alamat, tgl_pemesanan, pembayaran) VALUES ('$nama', '$no_hp', '$alamat', '$tgl_pemesanan', '$pembayaran');";
	$rows = $koneksi->query($query);
	if ($rows >= 1) {
			$error="Anda telah terdaftar";
	}
	header("location: pesan.html");
?>