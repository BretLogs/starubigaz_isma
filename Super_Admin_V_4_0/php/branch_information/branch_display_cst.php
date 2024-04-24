<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "strarubigazV2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from branch_customer and users tables
$sql = "SELECT branch_customer.Bcust_ID, branch_customer.user_id, users.username, users.email, users.phone_number
        FROM branch_customer
        INNER JOIN users ON branch_customer.user_id = users.user_id 
        WHERE branch_id = $branch_id AND users.user_type = 1 AND branch_customer.Bcst_type = 1";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Store user_id in $id_user
        $id_user = $row["user_id"];

        echo "<tr>";
        echo "<td style='font-size: 16;'>" . $row["user_id"] . "</td>";
        echo "<td style='font-size: 16;'>" . $row["username"] . "</td>";
        echo "<td style='font-size: 16;'>" . $row["email"] . "</td>";
        echo "<td style='font-size: 16;'>" . $row["phone_number"] . "</td>";
        echo "<td style='font-size: 16;'>";
        echo "<a class='btn btn-success btn-icon-split' role='button' style='border-style: none;padding-top: 0px;margin-right: 5px'; onclick='handleArchiveButtonClick($id_user)'>";
        echo "<span class='text-white-50 icon' style='margin-right: 0px;padding: 2px 8px;background: var(--bs-orange);color: var(--bs-orange);'><i class='far fa-file-archive' style='color: var(--bs-btn-color);'></i></span></a>";
        echo "</td>";
        echo "</tr>";
    }
}
 else {
    echo "<tr><td colspan='5'>No users found.</td></tr>";
}

$conn->close();
?>
