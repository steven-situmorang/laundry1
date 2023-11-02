<?php 
include 'koneksi.php';
 
$user = $_POST['username'];
$pass = $_POST['password'];
$login = mysqli_query($koneksi,"SELECT * FROM user where username='$user' and password='$pass'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $user;
	$_SESSION['status'] = "login";
	header("location:home.php");
}else{
	header("location:index.php");	
}
 
?>