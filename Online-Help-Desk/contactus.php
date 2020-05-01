<?php

	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "helpdesk";


   $conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
      }
	  
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST["name"];
	$email=$_POST["email"];
	$subject=$_POST["subject"];
	$message=$_POST["message"];
	
	
	$sql= "INSERT INTO contactus (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
	
	if ($conn->query($sql) === TRUE) {
    echo "Your message has been sent.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
	header("refresh:3; url=index.html");
	$conn->close();
?>