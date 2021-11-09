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

$sql ="select * from product where id = $id limit 1";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
   
    $rows = mysqli_fetch_assoc($result); 
}
else{
   
    header("Location:trangchu.php?action=1");
}

mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Infomation of Product</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			 background: url(https://farm4.staticflickr.com/3949/15590934605_8dbe71ae4e_o.jpg) no-repeat center center fixed;
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			  
			}
		table{
			
			border: 20px solid #d3dcf2;
			border-collapse: collapse;
			
			margin-left: 500px;
			margin-top: 180px;
			background-color: lightgrey;
			padding: 16px;
	
		}

		th{
			background-color:#48577D;
			color: white;
			font-size:20px;
		}
		td{
			background-color: #d3dcf2;
		}
	</style>
</head>
<body>
	<form action="xulyedit.php?id=<?php echo $id; ?>" method = "POST">
		<table>
		    
			<tr>
				<th colspan="2">Update Information</th>
			<tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $rows['name']; ?>"></td>
			</tr>
			
			<tr>
				<td>Price</td>
				<td><input type="number" step="any" name="price" value="<?php echo $rows['price']; ?>" ></td>
			</tr>

			<tr>
				<td>Picture(url)</td>
				<td><input type="text"  name="url" value="<?php echo $rows['url']; ?>"></td>
			</tr>

			<tr>
				<td>Description</td>
				<td><input type="text"  name="description" value="<?php echo $rows['description']; ?>"></td>
			</tr>
			
			<tr>
				<td>Status </td>
				<td>
					<input type="radio"  name="status" value="1" checked><label>MEN</label>
					<input type="radio"  name="status" value="0"><label>WOMEN</label>
				</td>
			</tr>
			
			<tr>
				<td>Size</td>
				<td><input type="number" step="any"  name="size" value="<?php echo $rows['size']; ?>" ></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<button type="submit" name="btnUpdate">Update</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>