
<?php 
session_start();
if(isset($_SESSION['id']['customer'])){
	$name=$_SESSION['name'];
}

$id= $_GET['id'];

// Lay ra thong tin tu database
require_once("Admin/DBHelper/connectDB.php");
// Cau lenh sql
$sql = "SELECT * FROM product WHERE id = $id";
// Chay cau lenh
$result = mysqli_query($conn,$sql);
// Phan tich result
if(!is_bool($result) and mysqli_num_rows($result)==1){
	$row = mysqli_fetch_assoc($result);
	$name = $row['name'];
	$url = $row['url'];
	$price = $row['price'];
	$description = $row['description'];
	$status= $row['status'];
	$size=$row['size'];
}
// Dong ket noi
mysqli_close($conn);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $name ;?></title>
 	<meta charset="utf-8">
 	<style type="text/css">
 	*{
		scroll-behavior: smooth;
		box-sizing:border-box;
	}
	*{	
		width: 100%;
		margin: 0;
		padding: 0;	
	}
	body{
	
		height: auto;
     	font-family: Helvetica;
		background-color:white;
	}

 	ul{
		list-style: none;
	}
	#logosignin a{
		color: black;
		text-decoration: none;
	}
  	#logosignin a:visited{
        color: red;
    }
    #logosignin a:hover{
		color: red;
    }
	.header{

    	display: inline-flex;
       	flex-wrap: wrap;
      	width:100%;
      	height:90px;
   
    }
	#banner{
		
     	text-align:center;
		width: 100%;
		height: 20px;
 
		}
   
	#logo{
		width: 210px;
		height: 100px;	
      	margin-top:17px;
	    padding:1em;
	    text-align:center;
		background-color:white;
	}

	#menu{
		width: 660px;
		margin-top:2px;
   		padding: 1em;
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
			width:475px;
			height:auto;
			float: left;
	}
    #logosignin{
		display: flex;
		background-color:white;
        width: auto;
		margin:auto;      
		
		
	}
	#logosigin ul{
		list-style-type:none;
		float: left;
	}
    #logosignin li{

  		display: inline-block;
		width: auto;
		line-height: 0px;	
		padding: 10px;
	}





	.search-container button {
	  padding:3px;
	  margin-top: 16px;
	  margin-right: 70px;
	  font-size: 20px;
	  border: none;
	  background-color: white;
	  transition:0.6s ease-in-out;
	  z-index: -1;
	}
	input[type="text"] {

	    width:100px;
	    border: none;
	    outline:none;
	}
	#user{
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
	#title{
		padding-left: 10px;
		width:900px;
		height:700px;
		float: left;
	}
	#title a{
		text-decoration: none;
	}
	#title a:hover {
		text-decoration:underline;
	}
	#info{
	
		width:auto;
		padding-top: 100px;
		font-family:Courier New;
	}
	#info a{
		text-decoration: none;
		color: red;
		font-size:28px;
		font-weight: bold;
	}
	#info a:hover{
		color:blue;
		font-weight: bolder;
	}
	#info a:active{
		color:red;
		font-weight: bolder;
		text-decoration: underline;
	}
	/*footer*/
	footer {

    background-color: white;
    position: relative;
    z-index: 1;

	}
	

	footer  ul {
		background-color: #615e57;
	    list-style: none outside none;
	    margin: 0 auto;
	    
	    overflow: hidden;
	    position: relative;
	    width: 100%;
	}
	footer > ul li {
	    float: left;
	    padding: 20px 15px;
	    width: 33.3%;
	    box-sizing:border-box;
	}



	footer > ul li .text {
	    color: #8c8787;
	    font-size: 13px;
	    line-height: 20px;
	    margin-left: 105px;
	    position: relative;
	    text-align: justify;
	}
	.text h4 {
	    color:white;
	    font-size: 22px;
		letter-spacing: 1px;
	    margin-bottom: 10px;
	    font-family: Calibri;
	}
	.text a {
	    border-bottom: 1px dotted transparent;
	    color: lightgrey;
	    
	}
	.text a:hover {
		
	    border-color: white;
	}
	#footer-line{
	
	    bottom:0;
		width: 100%;
		background-color:black;
		color: white;
		text-align: center;
		font-size:12px; 
		line-height: 60px;
	}

 	</style>
 </head>
 <body>
 	 <div id="banner">
	     <marquee style="background-color: lightgrey; direction="right";behavior="alternate";scrollamount="100";loop="-1"; letter-spacing:100px"><strong>Free Express Delivery</strong>On Orders Over $75. <strong>Gift Card</strong>On Orders Over $75.
	      </marquee>
  	</div>
 
    <div class="header"> 
	
	    <div id = "logo">
	         	<a href="home.php" target="_blank"><img src="https://www.converse.com.au/static/version1595501252/frontend/Ewave/converse/en_AU/images/logo.svg"></a>
	    </div>

    	<div id ="menu">
			<ul>
				<li><a  href="women.php">WOMEN</a></li>
				<li><a  href="men.php">MEN</a></li>
				<li><a  href="LME.php">EDITION </a></li>
				<li><a  href="#">NEWS</a></li>
				<li><a  href="ourstories.php">STORIES</a></li>
			</ul>
		</div>
		<div id="inner">
			<div id="logosignin">
				<ul>
					<li>
						<?php 
						if(!isset($_SESSION['customer']['id'])){  
						
							echo'
							
							<ul id="user">
								<li><a style="font-size:25px;font-family: copperplate;">
								</a><img src="https://image.flaticon.com/icons/svg/21/21104.svg" style= "width:20px ;height:20px;">
										<ul id="sub-menu">
											<li><a href="../Pj/Customer/LoginC/dangxuat.php">Log out</a></li>
										</ul>
								</li>
							</ul>
							';
						}
						else{
                       echo '
						<a href="../Pj/Customer/LoginC/dangnhap.php">	
							<span style="font-size: 19px;font-family: Courier New; color: black;">My Account</span>
							<img src="https://image.flaticon.com/icons/svg/21/21104.svg" style= "width:20px ;height:20px;">
						</a>';
					 }
					 ?>
					</li> 
					     <!--  -->

					<li>
						<a href="../Pj/Customer/giohang/xemgiohang.php">
							<img src="https://image.flaticon.com/icons/svg/1170/1170627.svg" style= "width:20px ;height:20px;">
						</a>
					</li>
					<li>
						<a>
						<div class="search-container">
							<form action="home.php" method="GET">
								<input type="hidden" name="action" value="1">
								<input type="text" name="keyword" placeholder="Search..." >
								<button type="submit" name="btnSearch" style="width: 26px;"><img src="https://image.flaticon.com/icons/svg/149/149852.svg" style= "width:20px ;height:20px;"></button>
							</form>
						</div>	
						</a>
					</li>
				</ul>		
			</div>
		</div>
	</div>
 	<br><br><br>
 	
 	<div id="title">
 		<a href="home.php" style="padding-left:20px;font-size: 15px;color: black ;letter-spacing: 1px;font-family:Courier New;font-weight: bold;">Home</a>/<h2 style="font-family:Courier New;display: inline;font-size: 15px;"><?php echo $name ;?></h2>
 		<img src="<?php echo $url ?>" height="550px" >
 	</div>	
 	<div id="info">
 		<span style="font-family:Courier New;font-size:30px;letter-spacing: 1px;font-weight: bolder;"><?php echo $name ;?> </span>
 			<br><br>
 		<h3><?php echo "$".$price; ?></h3>
 			<br>
 		<h3>Size:<?php echo $size; ?></h3>
	 		<br>
	 	<?php 
				if(!is_bool($result)){
					foreach($result as $row){
							    $id= $row['id'];
								echo "<a href='Customer/giohang/themvaogiohang.php?id=$id'>Add to Cart</a>";
					}
				}
				else{
					echo "Error : ".mysqli_error($conn);
				}
			 ?>
 	</div>
<br><br>
 <p style="font-family:Times New Roman;font-size:18px;"><strong>Description</strong>: <?php  echo $description;?></p>

<br><br>


 <!-- FOOTER -->
	<footer>
       
        <ul>
           
    	<li>
	        <div class="text">
	            <h4>Free Express Delivery</h4>
	            <img src="https://www.flaticon.com/premium-icon/icons/svg/2827/2827615.svg" style="height:50px;width: 50px;">
	            <div>On orders over $75.</div>
	            <br><br><br>
	            <h4>Worry-Free Returns</h4>
	            <img src=" https://www.flaticon.com/premium-icon/icons/svg/2279/2279674.svg" style="height:50px;width: 50px;">
	            <img src=" https://www.flaticon.com/premium-icon/icons/svg/3155/3155988.svg" style="height:50px;width: 50px;">
	            <div>If you’re not satisfied, simply return your order within 30 days.</div>
	        </div>
   	 	</li>
    	<li>
	         <div class="text">
	            <h4>Follow Us </h4>
	            <img src="https://image.flaticon.com/icons/png/512/665/665209.png" style="height:50px;width: 50px;">
	            <img src="https://image.flaticon.com/icons/png/512/665/665211.png" style="height:50px;width: 50px;">
	            <img src="https://image.flaticon.com/icons/png/512/665/665228.png" style="height:50px;width: 50px;">
	            <img src=" https://image.flaticon.com/icons/png/512/665/665232.png" style="height:50px;width: 50px;">
	           
	            <div>Stay up-to-date with us for exclusive previews of the newest launches and more.</div>
	            <br><br>

	            <h4>Converse Gift Card  </h4> 
	            <img src=" https://www.flaticon.com/premium-icon/icons/svg/1062/1062980.svg" style="height:40px;width: 40px;margin-left: 10px;">
	            <div>Give them exactly what they want with a Converse Gift Card.</div>
	        </div>
	    </li> 
	    <li>  
		        <div class="text">
		            <h4>About Converse</h4>
		            	<a href="ourstories.php">Our Story</a><br>
		            	<a href="ourstories.php">Our Stories</a><br>
		            	<a href="ourstories.php">Careers</a><br>
		            	<a href="ourstories.php">Stories</a><br>
		            	<br><br><br>
		            	<h4>Payment</h4>
		            	<img src="https://image.flaticon.com/icons/svg/680/680053.svg" style="height:100px;width:100px;">
		            	<br>		            	
		            <div style="background-color: white;padding-left: 20px; width: 300px;">		         	
			            <img src="https://image.flaticon.com/icons/svg/196/196566.svg" style="height:60px;width:60px;">
			            <img src="https://image.flaticon.com/icons/svg/196/196561.svg" style="height:60px;width:60px;">
			            <img src="https://image.flaticon.com/icons/svg/196/196578.svg" style="height:60px;width:60px;">
			            <img src="https://image.flaticon.com/icons/svg/196/196556.svg" style="height:60px;width:60px;">
		        </div>
    	</li>
        </ul>  
    </footer>
    <div id="footer-line">
		<p>DESIGNED BY CNV. @Conquest Sports (Aust) Pty Ltd. Licensed Distributor of Converse. Authorised User of Converse Trademarks.</p>
	</div>
 </body>
 </html>