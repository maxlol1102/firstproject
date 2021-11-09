<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<meta charset="utf-8">
	<style type="text/css">
	*{
		padding:0px;
	}
	body{
		      font-family:"Georgia";

			  background-color: white;

		}
	table{
			background-color:white;
			padding: 0px;
    }

    #banner{
		background-color:#d1d1d1;
     	text-align:center;
		width: 100%;
		height: auto;
		margin: auto;
      	display: block;
		}
    #header{
      width:100%;
      height:90px;
      
    }

    }
	#logo{
        margin-top:10px;
        top:100px;       
        padding:1em;
        align-items:center;
	    background-color:white;
	      float:left;
	    }
	#left{
			margin-top: 50px;
      		margin-left:160px;
			float: left;
		  	top: 500px;
		}
    #right{
      background-color:white;
      font-size:18px;
      width:500px;
      float:right;
      border-style: none;
      border-width: 1px;
      border-radius: 0px; 
      margin-right:130px; 
      padding:1em;
    }
    ul,li{
      color:grey;
    }
	#footer{
		margin-left:400px;
		margin-top: 350px;
		color: grey;
	}
	</style>
</head>
<body>
		<div id="banner">
	     	<marquee style="marquee direction="right";behavior="alternate";scrollamount="100";loop="-1"; letter-spacing:100px"><strong>Free Express Delivery</strong>On Orders Over $75. <strong>Gift Card</strong>On Orders Over $75.
	      	</marquee>
	  	</div>
   		<div id="header"> 
       		<div id = "logo">
       		 	<a href="../../home.php" target="_blank" style="position: absolute;"><img src="https://www.converse.com.au/static/version1595501252/frontend/Ewave/converse/en_AU/images/logo.svg" alt="converse"width="700px"></a>
      		</div>
		</div>	
	
	<div> 
		<img src="https://i.pinimg.com/originals/15/a7/67/15a76799ed39603832dc9f4d541ea43b.jpg" width="100%" height="300px">
	</div>

	<div id="left">
		<form action="xulydk.php" method="POST">
		<table cellspacing="0" cellpadding="4">
			<tr>
				<th colspan="2" style="text-align:left">Please fill in all fields below:</th>
      		</tr>
      		<tr>
				<td>Name</td>
				<td><input type="text"  name="name" placeholder="Name" required></td>
			</tr>
      		<tr>
				<td>Email</td>
				<td><input type="email"  name="email" placeholder="Email" required></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="Password"  name="pass" placeholder="Password"required></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio"  name="gender" value="1" checked><label>Male</label>
					<input type="radio"  name="gender" value="0"><label>Female</label>
				</td>
			</tr>
			
			<tr>
				<td>Date of Birth</td>
				<td><input type="date"  name="dateofbirth" ></td>
			</tr>

			<tr>
				<td>Country</td>
				<td><input type="text"  name="country" placeholder="Country"required></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">
					<button type="submit" name="btnDangki">Sign Up</button>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><p>Already have account?<a href="dangnhap.php">Sign in now</a></p></td>
			</tr>
		</table>
		</form>
	</div>
  		<hr style=" border-left: 2px solid grey;height: 200px; position: absolute;left: 49%;margin-left: -3px;top: 500px;"> 
<div id="right">
    <h4 style="text-align:center;font-size: 28px;">Member benefits</h4>
    <hr style ="width:80%;">
    <p>Create an account for a super fast checkout, save your favourites, and get personalised suggestions across Converse.com.au</p>
    <ul>
      <li><span>Fast, Free Shipping</span></li>
      <li><span>Easy Returns</span></li>
      <li><span>Save Your Favourites</span></li>
      <li><span>New Releases & Special Offers</span></li>
    </ul>
	</div>
<div id="footer">
	<p>@CNV- All Rights Reserved. Designed by HTML.CSS</p>
</div>

</body>
</html>