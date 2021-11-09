<?php 
$conn = mysqli_connect("localhost","root","");
if(!$conn) {
	die("Ket noi that bai ".mysqli_connect_error());
}
// Chon database
$db = "project";
if(!mysqli_select_db($conn,$db)){
	die("Khong co database $db");
}
// Dat charset
mysqli_set_charset($conn,"utf-8");

 ?>