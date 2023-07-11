<?php 
include_once('lib/db.php');
 
$username = $_POST['username'];
$phone = $_POST['phone'];
$password = $_POST['password'];
 
$login = mysqli_query($db,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "register";
	header("location:login_pelanggan.php");
}else{
	header("location:index_pelanggan.php");	
}
 
?>