<?php
// Check if the inventory_id and Prod_image are provided
if (isset($_GET['inventory_id']) && isset($_GET['pImage'])) {


    // Database connection code
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "strarubigazv2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
//test
    // Prepare and bind the UPDATE statement
    $stmt = $conn->prepare("UPDATE inventory SET Inv_Type = 0 WHERE inventory_id = ?");
    $stmt->bind_param("i", $inventory_id);

    // Set parameter and execute the statement
    $inventory_id = $_GET['inventory_id'];
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        // Successful update, delete the associated prod_image file
        $prodImage = $_GET['pImage'];
        if (file_exists("images/" . $prodImage)) {
            unlink("images/" . $prodImage);
            echo "Inventory archived successfully and associated image deleted";
        } else {
            echo "Inventory archived successfully but associated image not found";
        }
    } else {
        echo "Failed to archive inventory";
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // Error message if inventory_id or Prod_image is not provided
    echo "Inventory ID or Prod_image is not provided";
}
?>
