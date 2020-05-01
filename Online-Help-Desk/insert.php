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
	$fname=$_POST["firstname"];
	$lname=$_POST["lastname"];
	$email=$_POST["email"];
	$gender=$_POST["gender"];
	$age=$_POST["age"];
	$password=$_POST["confirm"];
	
	$sql= "INSERT INTO patient (fname, lname, email, gender, age, password) VALUES ('$fname','$lname', '$email', '$gender', '$age', '$password')";
	$sql= "INSERT INTO login(email, password) VALUES ('$email', '$password')";
	
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
	header("refresh:3; url=echanneling.html");
	$conn->close();
?>