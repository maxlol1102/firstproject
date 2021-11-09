<?php 
// Kiem tra xem nguoi day co dang nhap hay ko ?
// Kiem tra Session co ton tai hay ko ?
session_start();

if(isset($_SESSION['admin'])){
	$id = $_SESSION['admin']['id'];
	$name = $_SESSION['admin']['name'];
	$level = $_SESSION['admin']['level'];
}
else{
	// Neu chua dang nhap, can dang nhap lai
	// Header("Location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang chu Admin</title>
	<meta charset="utf-8">
	<style type="text/css">
		
		/*resetCSS*/
		*{
			margin: 0;
			padding: 0;
		}
		body{
			font-family: Garamond;
			background-color:white ;
		}
		#root{
			width:1000px;
			height: auto;
			background-color:white;
			margin: auto; 
		}
		#header{

			width:100%;
			height: 10vh;
			background-color:white; 
		}
		#logo{
	       margin-top:17px;
	       
	       text-align:center;
		   background-color:white;
		   float:left;
		}
		#info{
			width:200px;
			height:10vh;
			float : right; 
		}
		#nav-menu{
			width: 20%;
			height:;
			background-color:black; 
			float:left;
			
		}

		#content{
			width:80%;
			height: 90vh;
			background-color:white; 
			float:left;
		}
		#nav-menu li{
			font-size: 23px;
			list-style-type: none;
			padding:10px;
		}
		#nav-menu a{
			color: white;
			text-decoration:none;
		}
		#nav-menu a:hover{
			color:red;
		}


	</style>
</head>
<body>
	<div id="root">
		<div id="header">
			<div id = "logo">
	         	<a href="#" target="_blank"><img src="https://www.converse.com.au/static/version1595501252/frontend/Ewave/converse/en_AU/images/logo.svg"></a>
	    	</div>
			<div id="info">
				<?php 
							echo
							'<a style="font-size:18px;font-family: copperplate;">'.$name.'
								</a><img src="https://image.flaticon.com/icons/svg/848/848043.svg" width="auto" height="20px">
							
							';
					
					 ?>
				<a href="Login/logout.php">Logout</a>
			</div>

		</div>
		<div id="nav-menu">
			<ul>
				<li>
					<a href="trangchu.php?action=1">Product MG</a>
				</li>
				<li>
					<a href="trangchu.php?action=2">Order MG</a>
				</li>
				<li>
					<a href="trangchu.php?action=3">Guest MG</a>
				</li>
			</ul>
			
		</div>

		<div id="content"> 
			<?php
			$action = '';
			if(isset($_GET['action'])){
				$action = $_GET['action'];
			}

			switch ($action) {
				case 1:
					include_once("Manager/Product/listpd.php");
					break;

				case 2:
					include_once("Manager/Order/or.php");
					break;

				case 3:
					include_once("Manager/Guest/gs.php");
					break;
				
				default:
					# code...
					break;
			}

			?>
			
		</div>
		
	</div>
</body>
</html>