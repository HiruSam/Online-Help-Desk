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
	$date=$_POST["date"];
	$number=$_POST["number"];
	$pname=$_POST["name"];
	$specialization=$_POST["specialization"];
	$hospital=$_POST["hospital"];
	$doctor=$_POST["doctor"];
	$email=$_POST["email"];
	$connumber=$_POST["connumber"];
	
	$sql= "INSERT INTO refund (appoin_date, appoin_number, p_name, specialization, hospital, d_name, email, phn_number) VALUES ('$date', '$number', '$pname', '$specialization', '$hospital', '$doctor', '$email', '$connumber')";
	
	if ($conn->query($sql) === TRUE) {
    echo "Your message have been mailed successfully.";
	header("refresh:5; url=index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
	
	$conn->close();
?>

