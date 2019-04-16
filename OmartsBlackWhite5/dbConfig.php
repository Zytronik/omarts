<?php
	$server = 'localhost';
	$user = 'root';
	$password = 'test123';
	$dbname = 'omarts';
	
	
	$conn = new mysqli($server, $user, $password, $dbname); // Connect to database server(localhost) with username and password.
	
	if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	}

?>
