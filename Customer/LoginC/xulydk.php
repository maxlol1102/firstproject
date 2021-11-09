<meta charset="utf-8">
<?php
session_start();

if(!isset($_POST['btnDangki'])){
	header("Location:dangki.php");
}
else{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass = $_POST['pass'];
  $gender=$_POST['gender'];
  $dateofbirth=$_POST['dateofbirth'];
  $country=$_POST['country'];
	

}
 $conn = mysqli_connect("localhost", "root");
 if(!$conn)die ("Kết nối thất bại,lỗi".mysqli_connect_error() );
  
$db="project";
  if (!mysqli_select_db($conn,$db)){
  	die("không có CSDL $db");
  
  }
$sql="INSERT INTO customer(name ,email, pass, gender, dateofbirth,country) VALUES ('$name','$email','$pass','$gender','$dateofbirth','$country')";
echo $sql;
  if(mysqli_query($conn,$sql)){
    session_destroy();
    header("Location:dangnhap.php");
}
else{
  echo" ĐĂNG KÍ THẤT BẠI!,ERROR:".mysqli_error($conn); 
  echo"<a href='dangki.php'>Return</a>";
}
//dong ket noi
 mysqli_close($conn);

  ?>
