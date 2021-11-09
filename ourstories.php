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


?>
<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<meta charset="utf-8">
	<style type="text/css">
	
	body{
		position: relative;
		height: 1000px;
		margin:0;
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
								#user li:active #sub-menu{
									color:red;
									
								}
	
	#footer-line{
		 position: fixed;
    	bottom:0;
		width: 100%;
		 background-color:black;
		 color: white;
		 text-align: center;
		font-size:10px; 
		line-height: 12px;
	}

	.container {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
}
      

	</style>


</head>

<body>
	<!-- Header -->
	<div id="banner">
	     <marquee style="marquee direction="right";behavior="alternate";scrollamount="100";loop="-1"; letter-spacing:100px "><strong>Free Express Delivery</strong>On Orders Over $75. <strong>Gift Card</strong>On Orders Over $75.
	      </marquee>
  	</div>
  	
    <div class="header"> 
	    <div id = "logo">
	         	<a href="home.php" target="_blank"><img src="https://www.converse.com.au/static/version1595501252/frontend/Ewave/converse/en_AU/images/logo.svg">
	    </div>
    	<div id ="menu">
			<ul>
				<li><a  href="women.php">WOMEN</a></li>
				<li><a  href="men.php">MEN</a></li>
				<li><a  href="LME.php">EDITION </a></li>
				<li><a  href="#">SALES</a></li>
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
								<li><a>'.$name.'</a>
										<ul id="sub-menu">
											<li><a href="../Pj/Customer/LoginC/dangxuat.php">Log out</a></li>
										</ul>
								</li>
							</ul>
							';
						}
						else{
                       echo '
						<a href="../LoginC/dangnhap.php">	
							<i style="font-size: 20px;font-family: Georgia; color: black;">My Account</i>
							<img src="https://image.flaticon.com/icons/svg/21/21104.svg" width="20px" height="20px">
						</a>';
					 }
					 ?>
					</li>

					
					<li>
						<a>
						<div class="search-container">
							<form action="#" method="GET">
								<input type="text" name="keyword" placeholder="Search...">
									<button type="submit" name="btnSearch"><img src="https://image.flaticon.com/icons/svg/149/149852.svg" width="20px" height="20px"></button>
							</form>
						</div>	
						</a>
					</li>
				</ul>		
			</div>
		</div>
	</div>
<div style="height: auto;width:1200px">
<!-- the 1 -->
	<div style="height: auto;width:1200px;padding-left: 20px;font-family:Tahoma;">
		<div style="width:600px; padding-top: 220px;float: left;">
			<span style="width:400px;letter-spacing: 2px; font-size:40px;font-weight:bolder;"> THE STORY OF CONVERSE</span><br>
			<span style="width:550px;letter-spacing: 1px; font-size:16px;">Converse has always pushed the boundaries of what a sneaker can do. Whether you’re sinking three-pointers on the court, hitting the half-pipe or need a pair of sneakers to survive your next rock concert, Converse has been there with you.</span>
			
		</div>
		<div style="width:500px;padding-top: 100px;float: left; padding-left:100px">
			<img src="https://www.converse.com.au/media/wysiwyg/D_Our_Story_1.jpg" style="width:660; height:600px" >
		</div>

<!-- the 2 -->
	<div style="height: auto;width:1200px;padding-left: 20px;font-family:Tahoma;">
		<div style="width:600px; padding-top: 10px;float: left;">
			<img src="https://www.converse.com.au/media/wysiwyg/D_Our_Story_2_2.jpg"  style=" width:670px;height:500px" >
		</div>

		<div style="width:500px;padding-top: 150px;float: left; padding-left:100px">
			<span style="letter-spacing: 2px; font-size:40px;font-weight:bolder;">HUMBLE
				BEGINNINGS</span><br>
			<span style="letter-spacing: 1px; font-size:16px;">
				Launched in 1908 by Marquis Mills as ‘Converse Rubber Shoe Company’, the company specialised in rubber-soled footwear (galoshes) for men, women and children. By 1910, Converse had begun manufacturing shoes daily, while in 1915, the company switched focus to creating athletic shoes.</span>
			
		</div>
	</div>
		
<!-- the 3 -->
	<div style="height: auto;width:1200px;padding-left: 10px;font-family:Tahoma;">
		<div style="width:600px; padding-top: 50px;float: left;">
			<span style="letter-spacing: 2px; font-size:40px;font-weight:bolder;">CHUCK TAYLOR &
				BASKETBALL</span><br>
			<span style="letter-spacing: 1px; font-size:16px;">
				However, it wasn’t until 1921 when Charles H. “Chuck” Taylor joined Converse after complaining to the sales office in Chicago about having sore feet. He persuaded the company to create a line of shoes designed purely for basketball, on the condition that he would also work as a salesman and promoter of the new All Star sneaker – which didn’t initially bear his name.</p>

				Chuck Taylor travelled across the country promoting the All Stars, creating such an impact that the sneaker was later renamed after him and his signature added on either side of the logo. By the 1930s, the All Star was being worn by basketball players throughout America thanks to the influence of Chuck Taylor. 

				In 2019, after being away from the game for over a decade, Converse reintroduced themselves into the basketball landscape releasing their latest performance basketball shoe – the All Star Pro BB. Combining decades worth of experience on the court with current basketball footwear technological advancements, this latest development promises peak performance and brand-new design style.
				</span>
		</div>

		<div style="width:500px;padding-top: 20px;float: left; padding-left:60px">
			<img src="https://www.converse.com.au/media/wysiwyg/D_Our_Story_3.jpg" style="width:650px;height:600px"  >
		</div>
	</div>
<!-- the 4 -->
 	<div style="height: auto;width:1200px;font-family:Tahoma;">
		<div style="width:500px;padding-top: 20px;float: left; padding-left:20px">
			<img src="https://www.converse.com.au/media/wysiwyg/D_Our_Story_4_1.jpg" style="width:650px;height:600px"  >
		</div>

		<div style="width:400px; padding-top: 50px;float: left;padding-left:260px;">
			<span style="letter-spacing: 2px; font-size:40px;font-weight:bolder;">FROM
				BASKETBALL TO
				SUBCULTURAL
				ICON</span><br>
			<span style="letter-spacing: 1px; font-size:16px;">
				Having dominated the basketball sneaker market for over 30 years, the Chuck Taylor All Star made a cultural shift and became prevalent on the music scene in the 80s and 90s. You could find them laced up on the feet of some of the biggest hip hop MCs and rockers in the world, including Nirvana’s Kurt Cobain, Wiz Khalifa, The Rolling Stones, Sex Pistols and The Ramones.

				The Chuck Taylor All Star represented so many different styles and was adapted by so many subcultures. Even today, Chucks have maintained their appeal after 100 years and their influence is unlike any other shoe.
				</span>
		</div>
	</div>
<!-- the 5 -->
	<div style="height: auto;width:1200px; float: left;padding-left: 10px;font-family:Tahoma;">
		<div style="width:500px; padding-top: 150px;float: left;padding-left: 95px">
			<span style="letter-spacing: 2px; font-size:40px;font-weight:bolder;">COLLECTIONS AND
				COLLABORATIONS</span><br>
			<span style="letter-spacing: 1px; font-size:16px;">
				From music producers and artists to fashion designers and more, over the years Converse has collaborated with likeminded creatives to produce limited-edition collections.

				Some of Converse’s collaboration partners include GOLF le FLEUR*, Neighbourhood, Hello Kitty, Comme des Garçons and J.W. Anderson.

				Converse drops new collaborations every month across a range of different categories, so check back regularly to see what limited editions are coming up next!
				</span>
		</div>

		<div style="width:500px;padding-top: 20px;float: left; padding-left:70px">
			<img src="https://www.converse.com.au/media/wysiwyg/D_Our_Story_7.jpg" style="width:650px;height:550px"  >
		</div>
	</div>
</div>	




	<div id="footer-line">
		<p>@Conquest Sports (Aust) Pty Ltd. Licensed Distributor of Converse. Authorised User of Converse Trademarks.</p>
	</div>

</body>
</html>