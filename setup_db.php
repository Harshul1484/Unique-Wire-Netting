<?php
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password is empty
$dbname = "unique_wire_netting";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    $conn->select_db($dbname);
} else {
    die("Error creating database: " . $conn->error);
}

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    location VARCHAR(255) NOT NULL,
    products TEXT,
    material VARCHAR(100),
    diameter VARCHAR(100),
    aperture VARCHAR(100),
    dimensions VARCHAR(100),
    application TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Database and table verified/created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>