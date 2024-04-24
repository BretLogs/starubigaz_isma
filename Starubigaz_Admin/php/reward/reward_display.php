<?php
// Establish database connection (replace with your own credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch rewards data from the database
$sql = "SELECT * FROM rewards WHERE reward_type = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $rewardid = $row['reward_id'];
        $rewardname = $row['reward_name'];
        $rewarddes = $row['description'];
        $rewardpoint = $row['point_value'];
        $rewardqty = $row['reward_qty'];
        $rImage = $row['reward_image'];
        echo "<tr>";
        echo "<td><img src='/Super_Admin_V_4_0/php/reward/images/" . $row['reward_image'] . "' style='height: 50px;border-radius: 5px;'></td>";
        echo "<td style='font-size: 16;'>" . $row['reward_id'] . "</td>";
        echo "<td style='font-size: 16;'>" . $row['reward_name'] . "</td>";
        echo "<td style='font-size: 16;'>" . $row['description'] . "</td>";
        echo "<td style='font-size: 16;'>" . $row['point_value'] . "</td>";
        echo "<td style='font-size: 16;'>" . $row['reward_qty'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>
