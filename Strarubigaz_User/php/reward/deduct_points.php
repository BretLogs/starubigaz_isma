<?php
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

// Get the user ID, reward ID, and point value from the AJAX request
$iduser = $_POST['user_id'];
$redeem_point_value = $_POST['redeem_point_value'];
$reward_id = $_POST['reward_id'];

// Check if user has enough reward points
$sql_check_points = "SELECT user_reward_pts FROM users WHERE user_id = $iduser";
$result_points = $conn->query($sql_check_points);
if ($result_points->num_rows > 0) {
    $row = $result_points->fetch_assoc();
    $user_reward_pts = $row['user_reward_pts'];

    // Proceed with deduction if user has enough points
    if ($user_reward_pts >= $redeem_point_value) {
        // Update user's reward points
        $sql_update_user_points = "UPDATE users SET user_reward_pts = user_reward_pts - $redeem_point_value WHERE user_id = $iduser";

        // Update reward quantity
        $sql_update_reward_qty = "UPDATE rewards SET reward_qty = reward_qty - 1 WHERE reward_id = $reward_id";

        // Perform both updates within a transaction
        $conn->begin_transaction();
        if ($conn->query($sql_update_user_points) === TRUE && $conn->query($sql_update_reward_qty) === TRUE) {
            // Insert into reward_claims table
            $sql_insert_claim = "INSERT INTO reward_claims (user_id, reward_id) VALUES ($iduser, $reward_id)";
            $conn->query($sql_insert_claim);

            // Insert into transactions table
            $transaction_type = "Redeem";
            $sql_insert_transaction = "INSERT INTO transactions (claim_id, user_id, transaction_type, points) VALUES (LAST_INSERT_ID(), $iduser, '$transaction_type', $redeem_point_value)";
            $conn->query($sql_insert_transaction);

            $conn->commit();
        } else {
            $conn->rollback();
            echo "Error updating points or reward quantity: " . $conn->error;
        }
    } else {
        echo "Insufficient reward points";
    }
} else {
    echo "Error: User not found";
}

$conn->close();
?>
