<?php
require_once 'includes/db_connect.php';

$sql = "SELECT * FROM inquiries ORDER BY created_at DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Last Inquiry in Database:\n";
    print_r($result->fetch_assoc());
} else {
    echo "No inquiries found in database yet.";
}

$conn->close();
?>