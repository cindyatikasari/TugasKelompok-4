<?php
	$server   = "localhost";
	$database = "5-in-1-delivery";
	$username = "root";
	$password = "";
	$db = new mysqli ($server, $username, $password, $database);
	if($db->connect_error){
		die("Koneksi gagal");
	}
?>
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Secu