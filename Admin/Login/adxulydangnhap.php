<?php 
// Lấy thông tin từ trang đăng nhập
// User và Pass
session_start();

if(isset($_POST['clickLogin'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  
}else{
 header("Location:login.php");
}
// Ket noi vao database, kiem tra xem co ban ghi (tai khoan) nao trung thong tin

// Ket noi database
require_once("../DBHelper/connectDB.php");

// Chuan bi cau lenh sql
// Khi ban ghi can lay thong tin : id, name, level
$sql = " select id, count(id) as'count' from `admin`
          WHERE email = '$user'
          and pass= '$pass' " ;

// Chay cau lenh
$result = mysqli_query($conn,$sql);

if(!is_bool($result) and mysqli_num_rows($result) ==1){
  $row = mysqli_fetch_assoc($result);
  if($row['count']==1){
  $_SESSION['admin'] = array();
  $_SESSION['admin']['id'] = $row['id'];
  $_SESSION['admin']['name']= $row['name'];
  $_SESSION['admin']['level'] = $row['level'];

  // Chuyen huong ve trang chu
  header("Location:../trangchu.php");
}
}
  else{
    header("Location:login.php?err=1");
}

 ?>