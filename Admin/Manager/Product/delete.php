<?php 
$id = $_GET['id'];

$server ="localhost";
$user = "root";
$pass = "";

$conn = mysqli_connect($server,$user,$pass);

if(!$conn) die("Ket noi that bai!");

$db = "project";
if(!mysqli_select_db($conn,$db)){
	die("Khong co database ten la $db");
}

$sql ="delete from product where id = $id";

if(mysqli_query($conn,$sql)){

	header("Location:../../trangchu.php?action=1");

}
else{
	echo "That bai, loi".mysqli_error($conn);
}
//B4 : Dong ket noi
mysqli_close($conn);


 ?>