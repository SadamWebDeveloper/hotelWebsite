<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve feedback data from the database
$sql = "SELECT name, feedback FROM feedback ORDER BY id DESC LIMIT 3";

$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>
