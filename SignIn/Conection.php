<?php 
class Connection {
	public $con;
	// connection to database
	public function __construct()
	{
		$this->con = new mysqli("localhost","root","","5-in-1-delivery");
	}
	// try authentication user
	public function login($username,$password)
	{
		$query="select *From daftar where username=? AND password=?";
		$stmt=$this->con->prepare($query);
		$stmt->bind_param("ss",$username,$password); 
		$stmt->execute();
		if($stmt->fetch())
		{
			header("location: index.html");
		}else {
			echo"Maaf Anda Gagal Login";
		}
	}
	public function register($username,$email,$password,$konfirmasi_password,$status)
	{
		if($password==$konfirmasi_password)
		{
			$password=md5($password);
			
		 	$query="INSERT INTO daftar (username,email,password,status) VALUES(?,?,?,?)";
		 	$statement=$this->con->prepare($query);
		 	$statement->bind_param('ssss', $username,$email,$password,$status);
			if($statement->execute())
			{
				header("location: login.html");
			}
		}else {
			echo 'the password mismatch';
		}
	}
}