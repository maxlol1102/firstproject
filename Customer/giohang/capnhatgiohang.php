<?php 
session_start();
if(isset($_GET['id'])){
 
    if(isset($_GET['action']))  $action = $_GET['action'];


	if($action=='tangsl'){
		$_SESSION['gio_hang'][$_GET['id']] ++ ;
	}

	if($action=='giamsl'){
		$_SESSION["gio_hang"][$_GET['id']] -- ;
	}
}

header("Location:xemgiohang.php");

?>