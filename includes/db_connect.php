<?php
$is_local = in_array($_SERVER['HTTP_HOST'] ?? '', ['localhost', '127.0.0.1']);

$servername = "localhost";

if ($is_local) {
    // Local XAMPP Credentials
    $username = "root";
    $password = "";
    $dbname = "unique_wire_netting";
} else {
    // Production Credentials
    $username = "u463881002_root";
    $password = "Harshul@1484";
    $dbname = "u463881002_unique_wire";
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>