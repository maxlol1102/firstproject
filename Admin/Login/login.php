<?php
session_start();

if(isset($_SESSION['admin'])){
header("location:../trangchu.php");
}
	$error= isset($_GET['err'])?$_GET['err']:"";
?>


<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOG-IN</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			  background: url(https://thumbs.gfycat.com/CanineSameEwe-size_restricted.gif) no-repeat center center fixed;
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			  font-family: Helvetica;
			}
		table{
			border-radius: 20px;
			margin: auto;
			background-color: #fd2563;
			padding: 20px;
			color :white;
		}
				.container{
			margin-top: 300px;
		}
	</style>
</head>
<body>
	<div class="container">
	<form method="POST" action="adxulydangnhap.php">
		<table cellspacing="0" cellpadding="4">
			<tr>
				<th colspan="2">ADMIN LOGIN</th>
			</tr>
			<?php
				if(!empty($error) and $error==1){?>
			<tr>
				<td style="color: red" colspan="2"> Password or email is not correct!</td>
			</tr>
			<?php
			}
			else {
				echo "<tr><td style='color=white'></td></tr>";
			}	
			?>		
			<tr>
				<td>User</td>
				<td><input type="email" name="user" placeholder="Email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password"  name="pass" placeholder="Password"></td>
			</tr>
	
			<tr>
				<td colspan="2" align="center">
					<button type="submit" name="clickLogin">LOG IN</button>
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>