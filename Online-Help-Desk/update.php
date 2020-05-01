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
	 
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email=$_POST["email"];
	$password=$_POST["password"];
	$pk=$_POST["primarykey"];
	
	
	
	$sql = "UPDATE patient SET email='$email', password='$password' WHERE p_id= '$pk' ";

	if ($conn->query($sql) === TRUE) 
	{
		echo "Record updated successfully";
		header("refresh:2; url=admin.php");
	} 
	else 
	{
		echo "Error uploading record: " . $conn->error;
		header("refresh:3; url=admin.php");
	}
	}
	$conn->close();
?>