<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2"; // Replace with your actual database name
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if admin_userid is provided via POST request
if (isset($_POST['adminid'])) {
    $admin_userid = $_POST['adminid'];

    // Update user_type to 0
    $update_user_query = "UPDATE users SET user_type = 0 WHERE user_id = $admin_userid";
    if ($conn->query($update_user_query) === TRUE) {
        // Update user_id in branches table to NULL
        $update_branch_query = "UPDATE branches SET user_id = NULL WHERE user_id = $admin_userid";
        if ($conn->query($update_branch_query) === TRUE) {
        } else {
            echo "Error updating branch record: " . $conn->error;
        }
    } else {
        echo "Error updating user record: " . $conn->error;
    }
} else {
    echo "Admin user ID not provided.";
}

// Close connection
$conn->close();
?>
