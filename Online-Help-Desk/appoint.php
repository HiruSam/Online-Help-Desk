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
	$pname=$_POST["pname"];
	$age=$_POST["age"];
	$address=$_POST["address"];
	$number=$_POST["number"];
	$doc_name=$_POST["doc_name"];
	$payment_method=$_POST["payment_method"];
	$appoindate=$_POST["date"];	
	
	$sql= "INSERT INTO appointment (p_name, age, address, number, doc_name, payment_method, appoin_date) VALUES ('$pname', '$age', '$address', '$number', '$doc_name', '$payment_method', '$appoindate')";
	
	if ($conn->query($sql) === TRUE) {
    header("refresh:1; url=payment.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
	
	$conn->close();
?>