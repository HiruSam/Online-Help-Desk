<!DOCTYPE html>
<html>
	<head>
		<title>Eco E-Channeling</title>
		
		<style>
			
			div.home
			{
    				position: absolute;
    				top: 225px;
    				right:400px;
    				width:500px;
    				height: 50px;
			
			}
			div.delete
			{
    				position: absolute;
    				top: 300px;
    				right:700px;
    				width:500px;
    				height: 250px;
					border: 2px solid #333;
			
			}
			div.update
			{
    				position: absolute;
    				top: 300px;
    				right:150px;
    				width:500px;
    				height: 250px;
					border: 2px solid #333;
			
			}
			.button
			{
   				 background-color: #333;
    				 border: none;
					 width:300px;
					 height:25px;
    				 color: white;
					 font-weight:bold;
    				 padding: 3px 10px;
    				 text-align: center;
   				 text-decoration: none;
  				 display: inline-block;
   				 font-size: 13px;
   				 margin: 4px 2px;
   				 cursor: pointer;
			}
			div.main
			{
				border: 2px solid #333;	
    				position: absolute;
    				top: 205px;
    				right: 590px;
    				width: 700px;
    				height: 295px;
				padding: 5px 5px;
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
		<div style="background-image: url(bg.jpg); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
			<div style="height: .1px;width: 100%;">
				<div style="float:left;width:30%"><a href="index.html"><img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-0qSMoi8QUEPaGom3JcyBN1D6EDgMKPPNvNZr3mj2rECvLvNK" length="920 pxl" width="175 pxl"></a></div>
				<div style="float:right;width:70%"><p style="font-family:serif;"><font size= "10" color="green"  ></font></p></br></br></br>
					
					<div class="home"><a href="index.html" class="button">Home</a></div>
					<div class="delete">
						<form name="myForm" action="delete.php" target="_blank" method="POST"><br><br>
							<input type="text" name="table" placeholder="Enter the table name: ">
							<input type="text" name="primarykey" placeholder="Enter the ID of the table" >
							<input type="submit" value="Delete"></form>
					</form>
					</div>
					<div class="update">	
						<form name="myForm" action="update.php" target="_blank" method="POST"><br>
							<input type="text" name="email" placeholder="Enter new email: ">
							<input type="password" name="password" placeholder="Enter password" >
							<input type="text" name="primarykey" placeholder="Enter ID of the table" >
							<input type="submit" value="Update"></form>
					</form>
					</div>
				</div>
			</div><br><br><br><br><br><br><br><br>
			
			
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
		
		
	</body>
	
</html>
