<?php 
include_once('lib/db.php');
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($db,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin?upload_product.php");
}else{
	echo "<script>alert('Username dan Password belum benar !')</script>";
	header("location:login_admin.php");	
}
 
?>