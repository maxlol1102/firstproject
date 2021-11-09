<?php 
session_start();

if(isset($_GET['id'])){
	$id  = $_GET['id'];
}
else{
	header("Location:xemgiohang.php");
}

// Kiem tra gio hang
if(!isset($_SESSION['gio_hang'])){
	// Neu chua co gio hang, se tao gio hang
	$_SESSION['gio_hang'] = array();
}
// Them san pham vao gio hang
if(isset($_SESSION['gio_hang'][$id])){
	// tang so luong san pham
	$_SESSION['gio_hang'][$id]++;
}
else{
	// la dau them vao gio hang
	$_SESSION['gio_hang'][$id] = 1;
}

header("Location:xemgiohang.php");

 ?>