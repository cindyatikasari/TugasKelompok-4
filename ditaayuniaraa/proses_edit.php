<?php

	require_once "database.php";//untuk menghubungkan/koneksi dengan database

	$id_barang = $_GET['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$stok_barang = $_POST['harga_jual'];
	$keterangan = $_POST['jumlah'];

	$sql = "UPDATE barang set nama_barang='$nama_barang', harga_jual='$harga_jual', jumlah='$jumlah' where id_barang=$id_barang";

	$result = $conn -> query($sql);

	if ($result) 
	{
		echo "<script>confirm('Pengelolaan barang') location.replace('hasil.php')</script>";
	}
	else
	{
		echo "gagal edit";	
	}
?>