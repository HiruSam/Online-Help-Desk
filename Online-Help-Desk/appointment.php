<!DOCTYPE html>
<html>
	<head>
		<title>Eco E-Channeling</title>
		<link rel="stylesheet" type="text/css" href="styles/stylesheet.css"/>
		<style>
			
				
			

			div.main
			{
				border: 2px solid #333;	
    				position: absolute;
    				top: 205px;
    				right: 300px;
    				width: 700px;
    				height: 650px;
					padding: 5px 5px;
					background-image: url(pic.jpg);
    				background-position: center;
    				background-repeat: no-repeat;
    				background-size: cover;
			}
			lable,p,span
			{
				color: #333;
			}
			h2
			{
				color: #333;
				width: 300px;
				margin: 5% auto;
			}
			input[type=text], select 
			{
 				width: 75%;
 				padding: 10px 16px;
 				margin: 8px 0;
 				display: inline-block;
 				border: 1px solid #ccc;
 				border-radius: 4px;
 				box-sizing: border-box;
			}
			input[type=submit] 
			{
 				width: 25%;
	 			background-color: #333;
 				color: white;
 				padding: 10px 10px;
 				margin: 6px 0;
 				border: none;
 				border-radius: 4px;
 				cursor: pointer;
			}
			form
			{
 				text-align: left;
 				width: 450px;
 			margin: 0 auto;
			}
			
		</style>
	</head>
	
	<body>
		<div class="bg">
			<div style="height: .1px;width: 100%;">
				<div style="float:left;width:30%"><a href="index.html"><img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-0qSMoi8QUEPaGom3JcyBN1D6EDgMKPPNvNZr3mj2rECvLvNK" length="920 pxl" width="175 pxl"></a></div>
				<div style="float:right;width:70%"><p style="font-family:serif;"><font size= "10" color="green"  ></font></p></br></br></br>
					<div class="signup"><a href="signup.php" class="button">Sign Up</a></div>
					<div class="login"><a href="LOGIN123.php" class="button">Log In</a></div>
					<div class="home"><a href="index.html" class="button">Home</a></div>
					<div class="admin"><a href="LOGIN_admin.php" class="button">Admin</a></div>
					<div class="header"><img class="header" src="pics\images.jpg" alt="Avatar" style="width:125px"></div>
					<div class="header1"><img class="header" src="pics\images3.jpg" alt="Avatar" style="width:200px;height:125px;"></div>
					<div class="header2"><img class="header" src="pics\images2.jpg" alt="Avatar" style="width:140px"></div>
				</div>
			</div><br><br><br><br><br><br><br><br>
			<div class="navbar">
  				
					<div class="dropdown">
    						<button class="dropbtn">Home 
      						<i class="fa fa-caret-down"></i>
   			 			</button>
    					
  					
					<div class="dropdown-content">
      						<a href="searching.html">Wikipedia</a>
      						<a href="blogpage.html">Doctor's Blog</a>
      						
    					</div>
					</div>
					<a href="Echanneling.html">Channel</a>
					<a href="history.html">Channel History</a>
  					<a href="LOGIN_contactus.php">Contact Us</a>
  					<a href="LOGIN_claimrefund.php">Claims Re - fund</a>	
			
			</div>
			<div class="main">
			<form name="myForm" action="appoint.php" target="_blank" method="POST">
			<center><h2>User Details Form</h2></center>
  	         <center><input type = "text" name="pname" placeholder="Patient name"" ><br><br></center>
			 <center><input type = "text" name="age" placeholder="Age""><br><br></center>
			 <center><input type = "text" name="address" placeholder="Address" Required><br><br></center>
			 <center><input type = "tel" name="number" placeholder="Contact no" Required><br><br></center>
			 <center><input type = "text" name="doc_name" placeholder="Doctor's name" Required ><br><br></center>
		     <center><input type = "text" name="payment_method" placeholder="Payment Type" required ><br><br></center>
		     <center><input type = "date" name="date" placeholder="Appointment Date" required ><br><br></center>
  		     <center><input type="submit" value="Submit"></form>
			<br></div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<footer style="background-color:#333">

				<img src = "pics\insta.png" alt="Avatar"style = "float : right ; width : 30px ; height : 30px ;">

				<img src = "pics\download.png" alt="Avatar"style = "float : right ; width : 30px ; height : 30px ;">

				<img src = "pics\twit.png" alt="Avatar"style = "float :right  ; width : 30px ; height : 30px ;">
				<div class="header"></div>
			</footer>
		</div>
		
		
	</body>
	
</html>
