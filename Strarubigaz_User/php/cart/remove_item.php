<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['order_item_id']) && isset($_POST['prod_ids'])&& isset($_POST['quantity'])) {
    $order_item_id = $_POST['order_item_id'];
    $prod_ids = $_POST['prod_ids'];
    $quantity = $_POST['quantity'];
    // Prepare and execute the SQL query to remove the item from the order_items table
    $stmtt = $conn->prepare("UPDATE inventory SET quantity = quantity + ? WHERE product_id = ?");
    $stmtt->bind_param("is", $quantity, $prod_ids);
    $stmtt->execute();

    // Prepare and execute the SQL query to remove the item from the order_items table
    $stmt = $conn->prepare("DELETE FROM order_items WHERE order_item_id = ?");
    $stmt->bind_param("i", $order_item_id);
    $stmt->execute();

    // Redirect back to the page or show a success message
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
} else {
    // Handle the case where order_item_id is not set
    echo "Error: Order item ID not provided.";
}
$conn->close();
?>