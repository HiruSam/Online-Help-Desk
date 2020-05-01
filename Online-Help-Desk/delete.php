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
	$table=$_POST["table"];
	$pk=$_POST["primarykey"];
	
	
	
	$sql = "DELETE FROM $table WHERE p_id= '$pk' ";

	if ($conn->query($sql) === TRUE) 
	{
		echo "Record deleted successfully";
		header("refresh:2; url=admin.php");
	} 
	else 
	{
		echo "Error deleting record: " . $conn->error;
		header("refresh:3; url=admin.php");
	}
	}
	$conn->close();
?>