<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<meta charset="utf-8">
	<style type="text/css">
	 	body{
			  background: url(https://c4.wallpaperflare.com/wallpaper/298/320/848/shoes-wallpaper-preview.jpg) no-repeat center center fixed;
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			  
			}
		table{
			
			border: 20px solid #d3dcf2;
			border-collapse: collapse;
			
			margin-left: 650px;
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

			<form action="xulyaddsp.php" method="POST">
			<table>
				<tr>
					<th colspan="2" style="text-align:center;">Add Product</th>
				</tr>

				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				
				<tr>
					<td>Price</td>
					<td><input type="number" step="any" name="price"></td>
				</tr>

				<tr>
					<td>Picture(url)</td>
					<td><input type="text" name="url"></td>
				</tr>

				<tr>
					<td>Description</td>
					<td><input type="text" name="description"></td>
				</tr>

				<tr>
					<td>Status</td>
					<td>
						<input type="radio" name="status" value="1" checked><label>MEN</label>
						<input type="radio" name="status" value="0"><label>WOMEN</label>
					</td>
				</tr>

				<tr>
					<td>Size</td>
					<td><input type="number" step="any" name="size"></td>
				</tr>


				<tr>
					<td colspan="2" align="center">
						<button type="submit" name="btnAdd">Add</button>
					</td>
				</tr>
			</table>
		</form>

</body>
</html>