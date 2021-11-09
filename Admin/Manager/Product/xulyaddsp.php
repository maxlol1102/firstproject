<?php
if (!isset($_POST['btnAdd'])) {
	header("location:trangchu.php");
}
else{
	$name =$_POST['name'];
	$price =$_POST['price'];
	$url =$_POST['url'];
	$description =$_POST['description'];
	$status =$_POST['status'];
	$size =$_POST['size'];
}
$sever ="localhost";
$user ="root";
$pass = "";
$conn = mysqli_connect($sever,$user,$pass);

if (!$conn) die("CONNECTION FALIED !!");


$db ="project";
if (!mysqli_select_db($conn,$db)) {
	die("Không có database tên là $db");
}

$sql ="insert into product(name,price,url,description,status,size) values ('$name','$price','$url','$description','$status','$size')";

echo "$sql";

if(mysqli_query($conn,$sql)){
	header("location:../../trangchu.php?action=1");
}
else{
	echo "Thất bại, lỗi".mysqli_error($conn);
}
?>






