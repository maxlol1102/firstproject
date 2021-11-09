<?php
session_start();
if(isset($_SESSION['id'])){
	$name=$_SESSION['name'];
}
?>

<!DOCTYPE html> 
<html>
<head>
	<title>MEN'S SNEAKERS</title>
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
	
	#
	ul{
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


	.tb1{
		padding-top: 100px;
		width:100%;
		empty-cells: hide;

	}
	.item {
		text-align: center;
		padding: 10px 10px 10px;
		width:200px;
		height: 400px;
	}
	
	.tb1 td:hover{
		border:1px solid black;
	}
	

	#cuic {
	  border-collapse: collapse;
	  border: 1px solid white;
	  width: 100%;	

	}

	#cuic td, th {
		font-family:Courier; 
		font-weight: bolder;
		width: 300px;
		text-align: center;
		font-size: 20px;
		color: black:;
	}
	#cuic a{
		color:black;
	}
	#cuic a:hover{
		color: red;
		text-decoration: underline;
		
	}
	


	}
/*footer*/
	footer {
    background-color: #2E3639;
    position: relative;
    z-index: 1;

	}
	footer .splitter {
	text-align: center;
    background-color:#222222;
    height:auto;
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
	<!-- Header -->
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
				<li><a  href="LME.php">LIMITED</a></li>
				<li><a  href="#">NEWS</a></li>
				<li><a  href="ourstories.php">STORIES</a></li>
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
 
	<!-- End Header -->
	
	

	
<br><br>
	<img src="https://www.converse.com.vn/pictures/catalog/home/slide-homepage/conversepeace-su20-flow2chuck70gridwall.jpg" style="width: 100%;height: 340px;">
<br><br><br><br><br><br><br>
	<b style=" padding-left:44%; font-weight:bolder; font-size: 45px;font-family: Arial;">Men</b>
	
	
	<table class="tb1">
		
	    <?php 
	    	// Ket noi vao database
	    	$conn = mysqli_connect("localhost","root","");
			if(!$conn) {
				die("Ket noi that bai ".mysqli_connect_error());
			}
			// Chon database
			$db = "project";
			if(!mysqli_select_db($conn,$db)){
				die("Khong co database $db");
			}
			// Chon ma hoa - giup nhap/ xuat tieng viet
			mysqli_set_charset($conn,"utf-8");

            // Chuan bi cau lenh sql
            $sql ="select id,name,price from product";
            $sql = "SELECT * FROM product
            where status = '1'";

            

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

            // thuc thi 
            ?>
            

            <tr>
		        <?php
		 		if(!is_bool($result) and mysqli_num_rows($result)>0){
		 			$total = mysqli_num_rows($result);
		 			$stt = 0;
		 			while($total > 0){
		 				echo "<tr>";
		 					while($row = mysqli_fetch_assoc($result)){
		 						$stt = $stt+1;
		 						echo "<td class='item'>";
		 							$url= $row['url'];
		 							$id = $row['id'];
		 							echo "<a href='chitietsanpham.php?action=2&id=$id'>";
		 							echo "<img src='$url'  height='200px' title='Click for more information' >";
		 							echo "<p style='font-size:18px; font-family:Georgia;color: black'>". $row['name']."</p>"."<br>";
		 							echo "</a>";
		 							echo "<b style = font-family: Courier; font-size: 18px; letter-spacing:1px;>$".$row['price']."</b>";
		 							echo "</td>";
		 						$total= $total -1;
		 						if($stt % 4 == 0) break;
		 					}
				 				echo "</tr>";
		 			}		
		 		?>
            </tr>
            <?php   
            }
            else{
            	echo "Khong co san pham";
            	echo mysqli_error();
            	
            }

            mysqli_close($conn);
	     ?>
	</table>
	<br>
	<div style="width:1222px;height: 132px;font-family: Courier New;text-align: center;margin: 60px 60px;font-size: 20px;">
		<b>Buy Men's Sneakers & Casual Shoes.</b>
		<p>"Featuring both classic silhouettes and modern reiterations, our iconic collection of Converse men's sneakers is the ultimate celebration of individuality and self-expression. Constantly updating with new colours and styles, choose from low, mid and <b>high top sneakers</b> to suit your look. Featuring Chuck Taylor All Stars, CONS and limited edition collaborators such as GOLF le FLEUR*, JW Anderson and more, shop Converse men’s sneakers to find your ideal everyday shoes."</p>
	</div>
	<br><br><br><br>
	<a href="#" style="font-weight: bolder;color: grey;font-size: 32px;padding-left: 43%;">Back to top</a>
    <br><br><br><br>
    <!-- FOOTER -->
	<footer>
        <div class="splitter">
        	<img src="https://www.logo.wine/a/logo/Converse_(shoe_company)/Converse_(shoe_company)-Converse2-White-Dark-Background-Logo.wine.svg" style="height: auto; width: 400px;">
        </div>
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
