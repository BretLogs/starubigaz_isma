<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM branches WHERE user_id IS NULL AND branch_type = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<select name="branch_id" style="color: var(--bs-gray-dark);border-radius: 2px;font-size: 16px;padding: 4px;padding-right: 24px;border-color: var(--bs-gray);">';
    echo '<option value="0" selected>Select a Branch</option>';
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["branch_id"] . '">' . $row["branch_name"] . '</option>';
        
    }
    echo '</select>';
} else {
    echo '<div class="col">No branches available.</div>';
}
?>