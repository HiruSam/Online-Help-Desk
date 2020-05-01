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
	$hospital=$_POST["hospital"];
	$disease=$_POST["disease"];
	$doc_name=$_POST["doc_name"];
	$text=$_POST["text"];
	
	
	$sql= "INSERT INTO blog (hospital, disease, doc_name, text) VALUES ('$hospital', '$disease', '$doc_name', '$disease')";
	
	if ($conn->query($sql) === TRUE) {
    echo "Uploaded successfully.";
	header("refresh:3; url=index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
	
	$conn->close();
?>

