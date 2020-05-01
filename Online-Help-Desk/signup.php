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
				font-weight: bold;
			}
			input[type=password], select 
			{
 				width: 50%;
 				padding: 10px 16px;
 				margin: 8px 0;
 				display: inline-block;
 				border: 1px solid #ccc;
 				border-radius: 4px;
 				box-sizing: border-box;
				font-weight: bold;
			}
			input[type=number], select 
			{
 				width: 50%;
 				padding: 10px 16px;
 				margin: 8px 0;
 				display: inline-block;
 				border: 1px solid #ccc;
 				border-radius: 4px;
 				box-sizing: border-box;
				font-weight: bold;
			}
			input[type=email], select 
			{
 				width: 75%;
 				padding: 10px 16px;
 				margin: 8px 0;
 				display: inline-block;
 				border: 1px solid #ccc;
 				border-radius: 4px;
 				box-sizing: border-box;
				font-weight: bold;
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
				font-weight: bold;
			}
			form
			{
 				text-align: left;
 				width: 650px;
				margin: 0 auto;
				border: 2px solid #333;
				padding: 26px 26px;
				font-weight: bold;
				background-image: url(pic.jpg);
    			background-position: center;
    			background-repeat: no-repeat;
    			background-size: cover;
			}
			.button {
    background-color: #333;
    border: none;
    color: white;
    padding: 3px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    margin: 4px 2px;
    cursor: pointer;
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
			<center><h1>User Details Form</h1></center>
			<form name="myForm" action="insert.php" target="_blank" method="POST">
				<lable>First name</lable><br>
				<input type="text" name="firstname" value="" required>
				<br>
				<lable>Last name</lable><br>
				<input type="text" name="lastname" value="" required><br>
				<lable>E-mail</lable><br>
				<input type="email" name="email" placeholder="" size="30" required />
				<br><br>
				<lable>Gender:</lable><br>
				<input type="radio" name="gender" value="male" required><span>Male</span>
				<input type="radio" name="gender" value="female" required><span>Female</span><br><br>
				<lable>Age:</lable><br>
				<input type="number" name="age" value=""><br> 
				<lable>New Password</lable><br>
				<input type="password" id="password" placeholder="*****" pattern="^(?=.*\d)(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." onkeyup='check();' required>
				<br><br>
				<lable>Re-type Password</lable><br>
				<input type="password" id="confirm" name="confirm" placeholder="*****" onkeyup='check();' required>
				<br>
				<input type="submit" value="Submit">

			</form>	
			<br>
			<footer >

				<img src = "pics\insta.png" alt="Avatar"style = "float : right ; width : 30px ; height : 30px ;">

				<img src = "pics\download.png" alt="Avatar"style = "float : right ; width : 30px ; height : 30px ;">

				<img src = "pics\twit.png" alt="Avatar"style = "float :right  ; width : 30px ; height : 30px ;">
				<div class="footer"></div>
			</footer>
			
		</div>
		<script>
			function check() 
			{
				if (document.getElementById('password').value == document.getElementById('confirm').value) 
				{
					document.getElementById('message').style.color = 'green';
					document.getElementById('message').innerHTML = 'matching';
				} 
				else 
				{
					document.getElementById('message').style.color = 'red';
					document.getElementById('message').innerHTML = 'not matching';
				}
			}
		</script>
		
		
	</body>
	
</html>
