<?php

require_once('Connection.php');

$auth=$_POST['auth'];

$obj=new Connection();
if($auth=='login')
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$obj->login($username,$password);

}else {
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$konfirmasi_password=$_POST['konfirmasi_password'];
	$status=$_POST['status'];
	$obj->register($username,$email,$password,$konfirmasi_password,$status);
}




