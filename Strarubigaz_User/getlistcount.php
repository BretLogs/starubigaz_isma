<?php
// getlistcount.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

if ($user_id) {
    // Prepare and execute the SQL query to count the order lines for the given user_id with 'Pending' status
    $stmt = $conn->prepare("SELECT COUNT(*) as order_line_count FROM order_items oi JOIN orders o ON oi.order_id = o.order_id WHERE o.user_id = ? AND o.status = 'Pending'");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $order_line_count = $row['order_line_count'];
        echo "$order_line_count";
    } else {
        echo "No order lines found for the given user ID with 'Pending' status.";
    }
} else {
    echo "No user ID provided.";
}

$conn->close();
?>