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
    				top: 195px;
    				right: 200px;
    				width: 900px;
    				height: 450px;
					padding: 5px 5px;
					background-image: url(pic.jpg);
    				background-position: center;
    				background-repeat: no-repeat;
    				background-size: cover;
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
			
			</div><br><br>
			
		<form name="myForm" action="refund.php" target="_blank" method="POST">
		<div class="main">
		
		<h2><center>Claim Re-fund Form</center></h2>
		<p>Please fill out this form and email it to ecochanneling@gmail.com</p>
		<div style="float:left;padding:10px;">Appoin. Date:
		<input type="date" name="date"></div>
		<div style="float:right;padding:10px;">Appoin. Number:
		<input type="text" name="number"></div>
		<br><br><br>
		
		<center><input type="text" name="name" placeholder="Patient name"></center><br>
		
		<center><select name="specialization" id="specialization">
			<option selected value="*">Specialization</option>
			<option value="Leukamia">Leukemia</option>
			<option value="Diabates">Diabetes</option>
			<option value="ENT">ENT</option>
			<option value=" Diseases">Heart Diseases</option>
			<option value="Kidney Disease">Kidney Diseases</option>
		</select></center>
		<br>
		<center><select name="hospital" id="hospital">
			<option selected value="*">Hospital</option>
			<option>Lion Hospitals</option>
			<option>Love and Care Hospital</option>
			<option>Dragon Hospitals</option>
			<option>Beetle's Bard Healthcare Centre</option>
			<option>Kellyane Healthcare Centre</option>
		</select></center><br>
		<center><input type="text" name="doctor" placeholder="Doctor"></center><br>
		<center><input type="email" name="email" placeholder="Email"></center><br>
		<center><input type="text" name="connumber" placeholder="Contact Number"></center><br>
		<center><input type="submit" value="Submit"></center>

	</div>
</form>
				
				
				
		
				
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<footer >

				<img src = "pics\insta.png" alt="Avatar"style = "float : right ; width : 30px ; height : 30px ;">

				<img src = "pics\download.png" alt="Avatar"style = "float : right ; width : 30px ; height : 30px ;">

				<img src = "pics\twit.png" alt="Avatar"style = "float :right  ; width : 30px ; height : 30px ;">
				<div class="footer"></div>
			</footer>
		</div>

		
	</body>
	
</html>
