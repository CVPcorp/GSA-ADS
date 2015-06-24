<?php
function getConnection() {
	$servername = "localhost";
	$username = "root";
	$password = "9TTsrqXMWiQi";
	$database = "gsadb";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	return $conn;
}
?>