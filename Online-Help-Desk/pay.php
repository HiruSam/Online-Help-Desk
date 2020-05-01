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
	$number=$_POST["number"];
	$date=$_POST["date"];
	$code=$_POST["code"];
	
	$sql= "INSERT INTO payment (name, card_no, expiry, security_code) VALUES ('$name', '$number', '$date', '$code')";
	
	if ($conn->query($sql) === TRUE) {
    header("refresh:1; url=notice1.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
	
	$conn->close();
?>