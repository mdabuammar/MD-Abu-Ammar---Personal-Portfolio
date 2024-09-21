<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "1245";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO info (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

// Check if the query executed successfully
if ($conn->query($sql) === TRUE) {
    echo "Data successfully saved!";
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>
