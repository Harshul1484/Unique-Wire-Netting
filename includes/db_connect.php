<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unique_wire_netting";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>