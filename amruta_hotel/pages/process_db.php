<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
// print_r($_SERVER);
// exit;
// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Insert the data into the database
    $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
          // Data inserted successfully, redirect to websiteWelcome.php
          header("Location: /websiteWelcome.php");
        
          exit; // Terminate the script to prevent further execution
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
