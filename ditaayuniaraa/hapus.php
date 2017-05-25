<?php

	include "database.php";

	$id = $_GET['id_barang'];
	$delete = "DELETE FROM barang WHERE id_barang = '$id'";
	$hasil = $conn -> query($delete);

	if($hasil){
		echo "<script>confirm('Apakah anda yakin ?')
		location.replace('hasil.php')</script>";
	}
	else{
		echo "<script>confirm('Gagal menghapus !')
		location.replace('hasil.php')</script>";
	}
?>