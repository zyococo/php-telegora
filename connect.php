<?php			
	$servername = "127.0.0.1";
	$username = "root";
	$password = "Araiharuka0207@";
	$dbname = "telegora_mall";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
?>