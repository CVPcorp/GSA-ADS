<?php
function getConnection() {
	$servername = "localhost";
	$username = "root";
	$password = "9TTsrqXMWiQi";
	$database = "gsadb";
	
	// Create connection: removed password arg to integrate Docker
	$conn = new mysqli($servername, $username, $database);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	return $conn;
}
?>