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
	$email=$_SESSION['email'];
	
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
	<title>Payment</title>
	<meta charset="utf-8">
	<style type="text/css">
	
	body{
		margin: 0px;
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
.search-container input[type="text"] {
      width:110px;
      border: none;
      outline:none;
 }
								#user {
									color: black;
									background-color: white;
								}
								#user  li{
									width: 100px;
									height: 40px;
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
									display:none;
									margin-top: -20px;
									position: absolute;
									background-color: white;
								}
								#sub-menu li{
									min-width:50px;
								}
								#user  li:hover #sub-menu{
									display: block;
									cursor: pointer;
									z-index: 1;
									color:grey;
									background-color: white;
								}
							    #sub-menu a{
							    	font-weight: bolder;
							    	color: black;
								}
							

		
		table{
			margin:0;
			width: 100%;
			border-collapse: collapse;
		}

		

		#right{
			border:0.5px solid grey;
			margin-left: 280px;
			margin-top: 70px;
			height: auto;
			width: 800px;
			font-family:  Candara;

		}
		#right a:hover{
			text-decoration: underline;
		}

		
		#myform {
			color: black;
			background-color: white;
			font-family: 'Open Sans', sans-serif; 
			margin: 50px auto;
			width: 90%;
		}

header {
  color: #26b5ad;
  font-size: 1.7em;
  padding: 3% 0;
  border-bottom: 2px solid black;
}

.area {
  color: black;
  width: 100%;
  margin: 40px 0;
}
label {
  line-height: 35px;
  display: table-header-group;
  font-size: 1.05em;
  letter-spacing: 0.5px;
  transition: all 0.3s ease;
}
input {
  width: 300px;
  box-sizing: border-box;
  padding: 15px;
  border: 1px solid black;
  border-radius: 5px;
  background: transparent;
  color: black;
  display: table-row-group;
  transition: all 0.3s ease;
  font-size: 1.05em;
}
.row {
  margin: 20px 0;
  width: 100%;
  padding: 0;
  display: table;
}

.col2 {
  display: table;
  width: 47%;
  float: left;
}

.col2:nth-child(2) {
  float: right;
  display: table;
}

.btn2{
	border-radius: 8px;
	background-color: black;
	color: white;
	padding :15px;
	padding-left: 50px;
	padding-right: 50px;
	font-size:18px;
}
.btn2:hover{
	border: 1px solid black;
	background-color: white;
	color: black;

}
#footer-line{
		width: 100%;
		background-color:black;
		color: white;
		text-align: center;
		font-size:12px; 
		line-height: 60px;
	}


/* The container */
.container {
display: block;
position: relative;
padding-left: 35px;
margin-bottom: 12px;
cursor: pointer;
font-size: 22px;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
position: absolute;
opacity: 0;
cursor: pointer;
height: 0;
width: 0;
}

/* Create a custom checkbox */
.checkmark {
position: absolute;
top: 8px;
left: 0;
height: 25px;
width: 25px;
background-color: #eee;
}
/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
content: "";
position: absolute;
display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
left: 9px;
top: 5px;
width: 5px;
height: 10px;
border: solid white;
border-width: 0 3px 3px 0;
-webkit-transform: rotate(45deg);
-ms-transform: rotate(45deg);
transform: rotate(45deg);
}

/*footer*/
	footer {
	border:0.5px solid grey;
    background-color: white;
    position: relative;
    z-index: 1;

	}
	

	footer  ul {
		background-color: white;
	    list-style: none outside none;
	    margin: 0 auto;
	    
	    overflow: hidden;
	    position: relative;
	    width: 90%;
	}
	footer > ul li {
	    float: left;
	    padding: 20px 15px;
	    width: 33.3%;
	    box-sizing:border-box;
	}



	footer > ul li .text {
	    color:black;
	    font-size: 13px;
	    line-height: 20px;
	    margin-left: 105px;
	    position: relative;
	    text-align: justify;
	}
	.text h4 {
	    color:black;
	    font-size: 22px;
		letter-spacing: 1px;
	    margin-bottom: 10px;
	    font-family: Calibri;
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
				<ul style=" width: 400px;padding-left: 0px;">
					<li>
						<?php 
						if(isset($_SESSION['id'])){  
						
							echo'
							
							<ul id="user">
								<li><a style="font-size:25px;font-family: copperplate;">'.$name.'
								</a><img src="https://image.flaticon.com/icons/svg/21/21104.svg" width="20px" height="20px">
										<ul id="sub-menu" >
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
						<a href="#">
							<img src="https://image.flaticon.com/icons/svg/660/660191.svg" width="20px" height="20px">
						</a>
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
	<br>
	<div style="width: 99%;height: 18px; background-color: lightgrey; padding:6px 6px;font-size:14px;text-align: center;">
		<span><strong>Need help? (+84) 09830 79271</strong> Monday - Friday 9am - 5pm EDST</span>		
	</div>

	<div id="right">			
 		<span style="font-family:Courier New;font-size:30px;letter-spacing: 1px;font-weight: bolder;"><?php echo "$name" ;?> </span>
 			<br><br>
 		<h3><?php echo "$".$price; ?></h3>
 			<br>
 		<h3>Size:<?php echo $size; ?></h3>
	 		<br>
	</div>
	<br><br><br><br>
	 <!-- FOOTER -->
	<footer>
       
        <ul>
           
    	
    	<li>
	         <div class="text">
	            <h4>Follow Us </h4>
	            <img src="https://image.flaticon.com/icons/png/512/665/665209.png" style="height:50px;width: 50px;">
	            <img src="https://image.flaticon.com/icons/png/512/665/665211.png" style="height:50px;width: 50px;">
	            <img src="https://image.flaticon.com/icons/png/512/665/665228.png" style="height:50px;width: 50px;">
	            <img src=" https://image.flaticon.com/icons/png/512/665/665232.png" style="height:50px;width: 50px;">
	           
	            <div>Stay up-to-date with us for exclusive previews of the newest launches and more.</div>
	            <br><br>
	        </div>
	    </li> 
	    <li style="float: right;"> 
			<h4 style="text-align: right;">Accepted Payment Types</h4>            	
		        <div style="background-color: white;padding-left:80px; text-align: right; width: 300px;">		         	
			            <img src="https://image.flaticon.com/icons/svg/196/196566.svg" style="height:70px;width:70px;">
			            <img src="https://image.flaticon.com/icons/svg/196/196561.svg" style="height:70px;width:70px;">
			            <img src="https://image.flaticon.com/icons/svg/196/196578.svg" style="height:70px;width:70px;">
			            <img src="https://image.flaticon.com/icons/svg/196/196556.svg" style="height:70px;width:70px;">
			            <img src="https://image.flaticon.com/icons/svg/39/39142.svg" style="height:70px;width:70px;">
			            <img src="https://image.flaticon.com/icons/svg/825/825484.svg" style="height:70px;width:70px;">
			            <img src="https://image.flaticon.com/icons/svg/217/217445.svg" style="height:70px;width:70px;">
		        </div>
    	</li>
        </ul>  
    </footer>
    <div id="footer-line">
		DESIGNED BY CNV. @Conquest Sports (Aust) Pty Ltd. Licensed Distributor of Converse. Authorised User of Converse Trademarks.
	</div>
</body>
</html>