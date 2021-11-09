<meta charset="utf-8">

<?php
session_start();
if(!isset($_POST['btnDangnhap'])){
	header("Location:dangnhap.php");
}
else{
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
}
 $conn = mysqli_connect("localhost", "root");
 if(!$conn)die ("Kết nối thất bại,lỗi".mysqli_connect_error() );
  $db="project";
  if (!mysqli_select_db($conn,$db)){
  	die("không có CSDL $db");
  
  }
  $sql = "select email,name, id, count(id) as'count' from customer
  where email = '$email'
  and pass='$pass' ";
  $result = mysqli_query( $conn,$sql);

  if (! is_bool($result) and mysqli_num_rows($result)>0){
    $row  = mysqli_fetch_assoc($result);
    if($row['count']==1){
      mysqli_close($conn);
        $_SESSION['check']='ok';
        $_SESSION['id']=$row['id'];
        $_SESSION['name']= $row['name'];
        $_SESSION['email']= $row['email'];
        
      header("Location:../../home.php");
    }
  }
  
  
  echo"Đăng nhập thất bại!";
  echo"<br>";
  echo"<a href='dangnhap.php'>Quay lại đăng nhập</a>";
  mysqli_close($conn);

  ?>

