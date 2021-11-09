<?php 
// Huy session
//Unset
session_start();

if(isset($_SESSION['admin']['id'])){
	unset($_SESSION['admin']['id']);
	session_destroy();
}
// Dang xuat thi chuyen huong ve dang nhap
header("Location:login.php");

 ?>