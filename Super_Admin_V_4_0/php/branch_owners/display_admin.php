<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from users table
$sql = "SELECT users.*, branches.branch_name FROM users LEFT JOIN branches ON users.user_id = branches.user_id WHERE role = 'Admin' AND users.user_type = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $admin_userid = $row["user_id"];
        echo "<tr>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . ($row["branch_name"] ? $row["branch_name"] : "Unassigned") . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo '<td>
                                 <a class="btn btn-success btn-icon-split" role="button" style="border-style: none;padding-top: 0px;margin-right: 5px;" onclick="handleAdminArchive(' . $admin_userid . ')"><span class="text-white-50 icon" style="margin-right: 0px;padding: 2px 8px;background: var(--bs-orange);color: var(--bs-orange);"><i class="far fa-file-archive" style="color: var(--bs-btn-color);"></i></span></a>
                            </td>';
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No users found</td></tr>";
}

$conn->close();
//                                <a class="btn btn-success btn-icon-split" role="button" style="border-style: none;padding-top: 0px;margin-right: 5px;" data-bs-target="#edit-modal" data-bs-toggle="modal"><span class="text-white-50 icon" style="margin-right: 0px;padding: 2px 8px;background: var(--bs-yellow);"><i class="far fa-edit" style="color: var(--bs-btn-color);font-size: 14px;transform: translate(2px);"></i></span></a>

?>