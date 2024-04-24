<?php
// Check if supplier_id is set in the request
if (isset($_POST["supplr_id"])) {
    // Get the supplier_id from the request
    $supplier_id = $_POST["supplr_id"];

    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "strarubigazV2";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL statement to update Spplr_type to 0
    $sql = "UPDATE suppliers SET Spplr_type = 0 WHERE supplier_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $supplier_id);

    if ($stmt->execute()) {
        // Update successful
        echo "window.location.href = 'inventory.php';";
    } else {
        // Error in update
        echo "Error: " . $stmt->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // If supplier_id is not set in the request
    echo "Supplier ID not provided.";
}
?>
