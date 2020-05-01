<!DOCTYPE html>
<html>
	<head>
		<title>Eco E-Channeling</title>
		<link rel="stylesheet" type="text/css" href="styles/stylesheet.css"/>
		<style>
			
			lable,p,span
			{
				color: #333;
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
			div.main
			{
					width:500px;
					height:425px;
					border:05px  solid #000;
					background-image: url(pic.jpg);
    				background-position: center;
    				background-repeat: no-repeat;
    				background-size: cover;
			}
			
			form{
			 
			 width:510px;
			 height:360px
		}

		h2{
			color: #ff0000;
    			font-variant	 
		}
		
		h1 {
    			text-transform: uppercase;
			color: #ff0000;
    			font-variant
		}

		input[type=submit] {
   			 width: 50%;
   			 background-color: black;
   			 color: white;
   			 padding: 14px 20px;
   			 margin: 8px 0;
   			 border: 100px;
   			 border-radius: 4px;
   			 cursor: pointer;
			 text-transform: uppercase;
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
			<center>

		<h1>contact - us</h1>
		
		

		<div class="main">
		<form name="myForm" action="contactus.php" target="_blank" method="POST">
		<br><br>
		 
       				 <input type="text" placeholder="Name" name="name">
				 <br><br><br>

				
				 <input type="text" required placeholder="E-mail" name="email" >
				 <br><br><br>

				
				 <input type="text" placeholder="Subject" name="subject" >
				 <br><br><br> 

				 <textarea name="message" placeholder="Enter message here..."></textarea>    
				 <br><br>
	          	         	
				 <input type="submit" value="Send Email">
		</form>
		
		</div>
		<br><br><br><br>
		<h2>When you press Send Email, your message will send to us!</h2>
	
		</center>
			<br>
			<footer >

				<img src = "pics\insta.png" alt="Avatar"style = "float : right ; width : 30px ; height : 30px ;">

				<img src = "pics\download.png" alt="Avatar"style = "float : right ; width : 30px ; height : 30px ;">

				<img src = "pics\twit.png" alt="Avatar"style = "float :right  ; width : 30px ; height : 30px ;">
				<div class="footer"></div>
			</footer>
		</div>
		
		
	</body>
	
</html>
