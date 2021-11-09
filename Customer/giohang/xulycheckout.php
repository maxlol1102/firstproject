<meta charset="utf-8">

<?php
session_start();

if(!isset($_POST['pay'])){
	header("Location:xulycheckout.php");
}
else{

  $email=$_POST['Email'];
  $name=$_POST['firstname'];
  $address = $_POST['address'];
  $phone=$_POST['phone'];
}

 $conn = mysqli_connect("localhost", "root");
 if(!$conn)die ("Kết nối thất bại,lỗi".mysqli_connect_error() );
  
$db="project";
  if (!mysqli_select_db($conn,$db)){
  	die("không có CSDL $db");
  
  }
 
  $sql= "INSERT INTO `order` (email ,name_receiver ,address_receiver ,phone_receiver) VALUES ('$email','$name','$address','$phone')";


  if(mysqli_query($conn,$sql)){
    session_destroy();
    header("Location:payment.php");
}
else{
  echo" ĐĂNG INFO THẤT BẠI!,<br>ERROR:".mysqli_error($conn); 
  
}
//dong ket noi
 mysqli_close($conn);

  ?>
