<?php 
session_start();
if(isset($_GET['id'])){
	unset($_SESSION["gio_hang"][$_GET['id']]);
	header("Location:xemgiohang.php");
}

?>