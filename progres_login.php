<?php 
session_start();
 
include 'koneksi.php';

$un = $_POST['un'];
$pw = $_POST['pw'];

$data = mysqli_query($conn,"SELECT * FROM user WHERE un='$un' AND pw='$pw'");

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['un'] = $un;
	$_SESSION['status'] = "login";
	header("location:dtbs.php");
}else{
	echo "<script>alert('Username dan Password Salah.');window.location='login.php';</script>";
}
?>