<?php

$sever ="localhost";
$user ="root";
$pass = "";
$conn = mysqli_connect($sever,$user,$pass);

if (!$conn) die("Kết nối thất bại!");
$db ="project";
mysqli_set_charset($conn,"utf8");
if (!mysqli_select_db($conn,$db)) {
	die("Không có database tên là $db");

}
$sql ="select * from product";

//kta nut timkiem
if(isset($_GET['btnSearch'])){
	$keyword = $_GET['keyword'];
    if(!empty($keyword)){
		$sql = "select  * from product
		where name like '%$keyword%'
		or price like '%$keyword%'
		or size like '%$keyword%'
		";
	}
}

$result = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Danh sách sản phẩm</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{

            table-layout: fixed;
			width: 1000px;
			height: auto;
		}
		#tb {
			width: 900px;
		}
			
		
		table,th, tr,td {

			border: 2px solid black;
			border-collapse: collapse;
			padding: 10px 10px;
		} 
		th {
		    background-color: gray;
		    color: white;
		    max-width: 200px;
		}
		th:hover {
		     background-color: black;
		     color: white;
		}
		tr{
			max-width: 300px;
		}
		td:hover {
		     background-color: lightgrey;
		     color: black;
	</style>
</head>

<body>


	
		<table id="tb">
			<tr>
			<td><a href="Manager/Product/add.php">ADD</a></td>
			
			<td colspan="7">
			    <form action="trangchu.php" method="GET">
			    	<input type="hidden" name="action" value="1">
					<input type="text" name="keyword" placeholder="Search...">
					<button type="submit" name="btnSearch">Search</button>
				</form>
			</td>

		</tr>
	
	
		<tr>
			<th>STT</th>
			<th>Name</th>
			<th>Price</th>
			<th>Url</th>
			<th>Description</th>
			<th>Status</th>
			<th>Size</th>
			<th>Action</th>

		</tr>
			<?php
			if(!is_bool($result) and mysqli_num_rows($result)>0){
				$stt = 1;
				while($rows = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$rows['id']."</td>";
				echo "<td>".$rows['name']."</td>";
				echo "<td>".$rows['price']."</td>";
				echo "<td>".$rows['url']."</td>";
				echo "<td>".$rows['description']."</td>";
				echo "<td>".$rows['status']."</td>";
				echo "<td>".$rows['size']."</td>";
				$id = $rows['id'];
				echo "<td>";
						echo "<a href='Manager/Product/delete.php?id=$id'>Delete</a>";
						echo " | ";
						echo "<a href='Manager/Product/edit.php?id=$id'>Edit</a>";
					echo "</td>";
				echo "</tr>";
				$stt ++;
			}
		} 
		mysqli_close($conn);
		?>
	</table>
</div>
</body>
</html>

