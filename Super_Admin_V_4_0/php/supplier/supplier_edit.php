<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the AJAX request
    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);

    // Extract individual fields
    $sid = $data['sid'];
    $sname = $data['sname'];
    $scname = $data['scname'];
    $semail = $data['semail'];
    $spnumber = $data['spnumber'];
    $saddress = $data['saddress'];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "strarubigazV2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to update supplier data
    $sql = "UPDATE suppliers SET supplier_name=?, contact_name=?, email=?, phone_number=?, address=? WHERE supplier_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $sname, $scname, $semail, $spnumber, $saddress, $sid);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "success"; // Send success response
        exit(); // Terminate script execution after sending response
    } else {
        echo "Error updating supplier data: " . $conn->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // If the request method is not POST, return an error message
    echo "Invalid request method";
}
?>
 