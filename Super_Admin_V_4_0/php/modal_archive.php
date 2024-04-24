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
    
    // Output the user ID
    echo "<script>var userId = '$userid';</script>";
} else {
    echo "User ID is not set or empty.";
}

// Close connection
$conn->close();
?>
