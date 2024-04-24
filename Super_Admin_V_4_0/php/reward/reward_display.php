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
        echo "<td><img src='php/reward/images/" . $row['reward_image'] . "' style='height: 50px;border-radius: 5px;'></td>";
        echo "<td style='font-size: 16;'>" . $row['reward_id'] . "</td>";
        echo "<td style='font-size: 16;'>" . $row['reward_name'] . "</td>";
        echo "<td style='font-size: 16;'>" . $row['description'] . "</td>";
        echo "<td style='font-size: 16;'>" . $row['point_value'] . "</td>";
        echo "<td style='font-size: 16;'>" . $row['reward_qty'] . "</td>";
        // Edit and archive buttons
        echo "<td style='font-size: 16;'>";
        echo "<a class='btn btn-success btn-icon-split' role='button' style='border-style: none;padding-top: 0px;margin-right: 5px;' data-bs-target='#edit-award-modal' data-bs-toggle='modal' data-rimage='" . $rImage . "' data-rid='$rewardid' data-rname='$rewardname' data-rdesc='$rewarddes' data-rpoint='$rewardpoint' data-rqty='$rewardqty' onclick='EditClick(this)'><span class='text-white-50 icon' style='margin-right: 0px;padding: 2px 8px;background: var(--bs-yellow);'><i class='far fa-edit' style='color: var(--bs-btn-color);font-size: 14px;transform: translate(2px);'></i></span></a>";
        echo "<a class='btn btn-success btn-icon-split' role='button' style='border-style: none;padding-top: 0px;margin-right: 5px;' onclick='handleArchiveButtonClick(\"$rewardid\", \"$rImage\")' ><span class='text-white-50 icon' style='margin-right: 0px;padding: 2px 8px;background: var(--bs-orange);color: var(--bs-orange);'><i class='far fa-file-archive' style='color: var(--bs-btn-color);'></i></span></a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>
