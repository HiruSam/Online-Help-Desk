<?php 

	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "helpdesk";


   $conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
     }
	  
if(isset($_POST["submit"]))
{  
  
	//if(isset($_POST['u_email']) and isset($_POST['password'])) 
	  
		$username=mysqli_real_escape_string($conn,$_POST['u_email']);  
		$password=mysqli_real_escape_string($conn,$_POST['u_password']);
	
	
		$_SESSION['u_email'] = $username;
		
		
		
		
     
		if(empty($username))
		{
			echo "Username is required";
		}
		if(empty($password))
		{
			echo "Password is required";
		}
    
     
		$query="SELECT * FROM admin WHERE email='$username' AND password='$password'";
		$result = mysqli_query($conn, $query);
	  
		if(mysqli_num_rows($result) == 1)
		{
			$_SESSION['u_email']=$row['u_email'];  
   
			echo "Logged in successfully.";
			header("refresh:2; url=admin.php");  
      
		} 
		else 
		{  
			echo "Wrong username/password combination";
			header("refresh:3; url=LOGIN_admin.php");
		}
}
?>  