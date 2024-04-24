<?php
// add_order.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Prepare and execute the SQL query to fetch the price of the product
    $stmtp = $conn->prepare("SELECT price FROM products WHERE product_id = ?");
    $stmtp->bind_param("i", $product_id);
    $stmtp->execute();
    $resultp = $stmtp->get_result();
    $rowp = $resultp->fetch_assoc();
    $price = $rowp['price'];

    // Fetch the branch_id associated with the given user_id from the branch_customer table
    $stmt = $conn->prepare("SELECT branch_id FROM branch_customer WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $branch_id = $row['branch_id'];

    // Check if there's an existing 'Pending' order for the given user_id and branch_id
    $stmt = $conn->prepare("SELECT order_id FROM orders WHERE user_id = ? AND branch_id = ? AND status = 'Pending'");
    $stmt->bind_param("ii", $user_id, $branch_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Use the existing order_id
        $row = $result->fetch_assoc();
        $order_id = $row['order_id'];
    } else {
        // Insert a new order into the orders table
        $status = 'Pending'; // Default status
        $stmt = $conn->prepare("INSERT INTO orders (user_id, branch_id, status) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $user_id, $branch_id, $status);
        $stmt->execute();

        // Get the ID of the newly inserted order
        $order_id = $conn->insert_id;
    }
    // Insert the order item into the order_items table
    $stmt = $conn->prepare("UPDATE inventory SET quantity = quantity - ? WHERE product_id = ?");
    $stmt->bind_param("is", $quantity,$product_id);
    $stmt->execute();


    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Item successfully added to the cart'); window.location.href='/Strarubigaz_User/buy_list.php?user_id=" . $user_id . "';</script>";
    } else {
        echo "Failed to update the inventory quantity.";
    }



    // Insert the order item into the order_items table
    $stmt = $conn->prepare("INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiid", $order_id, $product_id, $quantity, $price);
    $stmt->execute();


    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Item successfully added to the cart'); window.location.href='/Strarubigaz_User/buy_list.php?user_id=" . $user_id . "';</script>";
    } else {
        echo "Failed to update the inventory quantity.";
    }
}

$conn->close();
?>