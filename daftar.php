<?php
include "koneksi.php";

$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];

$sql="INSERT INTO user VALUES ('$username', '$nama', '$email', '$no_hp', '$password')";
$result=$conn->query($sql);

if($result){
    echo"<div class='alert alert-success'>
			<strong>Success!</strong> This alert box could indicate a successful or positive action.
		</div>
		<br/><center><a class='btn btn-success' href='masuk.php'>Login</a></center>";
   }else{
    echo"<div class='alert alert-danger'>
			<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
			</div>
     <br/><center><a class='btn btn-danger' href='daftar.html'>Back</a></center>";
   }    
?>