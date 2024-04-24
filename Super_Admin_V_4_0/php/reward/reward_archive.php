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

// Check if rewardid is set and not empty
if (isset($_GET['rewardid'])) {
    $rewardid = mysqli_real_escape_string($conn, $_GET['rewardid']);

    // SQL to update the reward_type to 0 based on rewardid
    $sql = "UPDATE rewards SET reward_type = 0 WHERE reward_id = $rewardid";

    if ($conn->query($sql) === TRUE) {
         // Successful update, delete the associated prod_image file
         $rewardImage = $_GET['rImage'];
         if (file_exists("images/" . $rewardImage)) {
             unlink("images/" . $rewardImage);
             echo "Inventory archived successfully and associated image deleted";
         } else {
             echo "Inventory archived successfully but associated image not found";
         }
    } else {
        echo "Error updating reward type: " . $conn->error;
    }
} else {
    echo "Reward ID is not set or empty.";
}

// Close connection
$conn->close();
?>
