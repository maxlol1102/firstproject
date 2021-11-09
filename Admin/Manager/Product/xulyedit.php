<?php 
$id = $_GET['id'];
if(!isset($_POST['btnUpdate'])){
	header("Location:edit.php");
}else{

	$name =$_POST['name'];
	$price =$_POST['price'];
	$url =$_POST['url'];
	$description =$_POST['description'];
	$status =$_POST['status'];
	$size =$_POST['size'];
}

$server ="localhost";
$user = "root";
$pass = "";

$conn = mysqli_connect($server,$user,$pass);

if(!$conn) die("CONNECTION FAILED!");

$db = "project";
if(!mysqli_select_db($conn,$db)){
	die("$db DOES NOT EXIST");
}

//B2 : Chuan bi cau lenh sql
$sql ="update product set 
name ='$name',	
price = $price,
url = '$url',
description = '$description',
status='$status',
size='$size'
where id = $id";

// Kiem tra cau lenh 
echo "$sql";

// B3 : Chay cau lenh 
if(mysqli_query($conn,$sql)){
	// Thanh cong
	// echo "Thanh cong";
	// Chuyen huong sang trang danhsachsp.php
	header("Location:../../trangchu.php?action=1");
}
else{
	echo "That bai, loi".mysqli_error($conn);
}
//Dong ket noi
mysqli_close($conn);

?>