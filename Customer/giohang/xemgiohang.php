<?php 
session_start();
// ket noi database
$conn = mysqli_connect("localhost","root","");
if(!$conn) die("Ket noi that bai");
// chon database
$db = "project";
if(!mysqli_select_db($conn,$db)){
	die("Khong co database $db");
}
if(isset($_SESSION['id'])){
	$name=$_SESSION['name'];
}

// chon charset
mysqli_set_charset($conn,"utf-8");
 $sql = "SELECT * FROM product";

            

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
	<title>Xem giỏ hàng</title>
	<meta charset="utf-8">
	<style type="text/css">
	
	body{
     	font-family: Helvetica;
		background-color:white;
	}
	#banner{
		margin-top: 0px;
		background-color:#d1d1d1;
		width: 100%;
		height: 20px;

	}
    .header{
    	display: flex;
    	flex-wrap: wrap;
      	width:100%;
      	height:90px;
   
    }
	#logo{
       margin-top:17px;
     
       padding:1em;
       text-align:center;
	   background-color:white;
	   float:left;
	}
	#menu{
		width: 690px;
		margin-top:4px;
		background-color: white;
	}
	#menu li{
			display: inline-block;	
			width: auto;
			height:auto;
			line-height: 50px;
			margin-left: 50px;	
			position: relative;

		}
		#menu a{
			width: auto;
			background-color:white;
			display: block;
			color: black;
			font-size:20px;
			text-decoration: none;
			text-align: center;
		}
		#menu a:hover{
			background-color:white;
			color :red;
		}
		#menu a:active{
      		background-color:white;
			color:black;
		}
		#inner{
			background-color:white;
			width:400px;
			height:auto;
			float: left;

		}
		
		ul {
			list-style: none;
		}
		a{
			color: black;
			text-decoration: none;
		}
  		a:visited{
                color: red;
            }
        a:hover{
                color: red;
            }
        #logosignin{	
        	display: flex;
			margin-top:3px;      
		    text-align:center;
			background-color:white;
		}
        #logosignin li{
			display: inline-block;	
			width: auto;
			line-height: 30px;
			margin-left: 0px;
			padding: 5px;	
			
		}
		
	


 
.search-container button {
  margin-top: 8px;
  margin-right: 16px;
  font-size: 20px;
  border: none;
  background-color: white;
  transition:0.6s ease-in-out;
}
 input[type="text"] {
      width:60px;
      border: none;
      outline:none;
 }
								#user {
									color: black;
									background-color: white;
								}
								#user  li{
									width: 100px;
									height: 50px;
									line-height: 50px;	
									position: relative;
									margin-top: -20px;
								}
								
								#user  a:hover{
									cursor: pointer;
									background-color:white;
									color :red;
									z-index: 1;
								}
								#user a:active{
									color:red;
								}
								
								/*sub*/


								
								#sub-menu{
									display: none;

									margin-top: -10px;
									position: absolute;
									background-color: white;
								}
								#sub-menu li{
									min-width:100px;
								}
								#user  li:hover #sub-menu{
									display: block;
									cursor: pointer;
									z-index: 1;
									color:grey;
									background-color: white;
								}
								#user li:active#sub-menu{
									color:red;
									
								}
		
		#footer-line{
			 font-size:10px; 
			 line-height: 30px;
			 position: fixed;
			 left: 0;
			 bottom: 0;
			 width: 100%;
			 background-color:black;
			 color: white;
			 text-align: center;
		}
		
		table{
			margin-top:100px;
			margin-left: 190px;
			width: 960px;
		}
		table,tr,td,th{
			border:1px solid black;
			border-collapse: collapse;
			text-align: center;
		}
		table tr:nth-child(odd){
			background-color:skyblue;
		}
		table tr:hover{
			background-color:pink;
		}


	</style>
</head>

<body>
	<!-- Header -->
	<div id="banner">
	     <marquee style="marquee direction="right";behavior="alternate";scrollamount="100";loop="-1"; "><strong style="letter-spacing:2px ">Free Express Delivery</strong>On Orders Over $75. <strong style="letter-spacing:2px ">Gift Card</strong>On Orders Over $75.
	      </marquee>
  	</div>
  
    <div class="header"> 
	    <div id = "logo">
	         	<a href="../../home.php" target="_blank"><img src="https://www.converse.com.au/static/version1595501252/frontend/Ewave/converse/en_AU/images/logo.svg">
	    </div>
    	<div id ="menu">
			<ul>
				<li><a  href="../../women.php">WOMEN</a></li>
				<li><a  href="../../men.php">MEN</a></li>
				<li><a  href="../../LME.php">EDITION </a></li>
				<li><a  href="#">SALES</a></li>
				<li><a  href="../../ourstories.php">STORIES</a></li>
			</ul>
		</div>
		<div id="inner">
			<div id="logosignin">
				<ul>
					<li>
						<?php 
						if(isset($_SESSION['id'])){  
						
							echo'
							
							<ul id="user">
								<li><a style="font-size:25px;font-family: copperplate;">'.$name.'
								</a><img src="https://image.flaticon.com/icons/svg/21/21104.svg" width="20px" height="20px">
										<ul id="sub-menu">
											<li><a href="../LoginC/dangxuat.php">Log out</a></li>
										</ul>
								</li>
							</ul>
							';
						}
						else{
                       echo '
						<a href="../LoginC/dangnhap.php">	
							<span style="font-size: 20px;font-family: Courier New; color: black;">My Account</span>
							<img src="https://image.flaticon.com/icons/svg/21/21104.svg" width="20px" height="20px">
						</a>';
					 }
					 ?>
					</li>

					<li>
						<a>
						<div class="search-container">
							<form action="../../home.php" method="GET">
								<input type="hidden" name="action" value="1">
								<input type="text" name="keyword" placeholder="Search..." >
								<button type="submit" name="btnSearch" style="width: 26px;"><img src="https://image.flaticon.com/icons/svg/149/149852.svg" style= "width:20px ;height:20px;"></button>
							</form>
						</a>
					</li>
				</ul>		
			</div>
		</div>
	</div>

	<!-- End Header -->
	
	<div class="container">
		
		<table>

			<tr>
				<th colspan="4" style="background-color:white ">
					<a href="../../home.php">Continue shopping</a>
				</th>
			</tr>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Amount</th>
				<th>Action</th>
			</tr>
			
			<tr>
				<th>
				<?php 

					if(isset($_SESSION['gio_hang'])){
						$gio_hang = $_SESSION['gio_hang'];
						$tong_tien = 0;
						foreach ($gio_hang as $id => $so_luong) {
							$sql = "SELECT * FROM product WHERE id = $id";
							$result = mysqli_query($conn,$sql);
							$row = mysqli_fetch_assoc($result);

							// tinh tong tien
	                        $tong_tien += $row['price'] * $so_luong;
							// in ra thong tin san pham
							echo "<tr>";
								echo "<td>".$row['name']."</td>";
								echo "<td>$".$row['price']."</td>";
								    // so luong 
									echo "<td>";
										echo "<a href='capnhatgiohang.php?id=$id&action=giamsl'><img src='https://image.flaticon.com/icons/png/512/2791/2791552.png'style='width:19px;height:19px;'></a>";
										echo $so_luong;
										echo "<a href='capnhatgiohang.php?id=$id&action=tangsl'><img src='https://www.flaticon.com/premium-icon/icons/svg/2952/2952087.svg'style='width:19px;height:19px;'></a>";
								    echo "</td>";
								echo "<td>";
									echo "<a href='xoaspgiohang.php?id=$id'><img src='https://www.flaticon.com/premium-icon/icons/svg/484/484662.svg'style='width:20px;height:20px;'></a>";
								echo "</td>";
							echo "</tr>";
						}
						// In ra tong tien
						echo "<tr>";
						    echo "<td colspan='2'>Total</td>";
							echo "<td colspan='2'>$".$tong_tien."</td>";
						echo "</tr>";
						if($tong_tien==0){			
							echo "<p style='text-align:center;font-size:55px;letter-spacing:2px;font-weight:bolder'> DON’T LEAVE YOUR CART EMPTY. </p>";
							echo "<p style='text-align:center;font-size;25px; font-weight:bold;letter-spacing:2px;border'>See your favorites, shop our latest and greatest, and discover your next Converse classic.</p>";
						}else{
						echo"<tr>";
										echo"<th colspan='4' style='background-color:white'>";
										echo "<a href='Checkout.php'>Checkout</a>";
					}
				}
					mysqli_close($conn);
				?>
			
					
				</th>
			</tr>
		
		</table>
	</div> 

	<div id="footer-line">
			<p>@Conquest Sports (Aust) Pty Ltd. Licensed Distributor of Converse. Authorised User of Converse Trademarks.</p>
	</div>
</body>
</html>