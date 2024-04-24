<?php
// Establish database connection (Replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user_id is set and not empty
if (isset($_POST['userid'])) {
    $userid = mysqli_real_escape_string($conn, $_POST['userid']);

    // Update branch_customer table to set Bcst_type = 0
    $updateBranchCustomerQuery = "UPDATE branch_customer SET Bcst_type = 0 WHERE user_id = '$userid'";
    if ($conn->query($updateBranchCustomerQuery) === TRUE) {
        // Update users table to set user_type = 0
        $updateUsersQuery = "UPDATE users SET user_type = 0 WHERE user_id = '$userid'";
        if ($conn->query($updateUsersQuery) === TRUE) {
            echo "window.location.href = 'branch_information.php';";
        } else {
            echo "Error updating users table: " . $conn->error;
        }
    } else {
        echo "Error updating branch_customer table: " . $conn->error;
    }
} else {
    echo "User ID is not set or empty.";
}

// Close connection
$conn->close();
?>
