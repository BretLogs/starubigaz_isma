<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// SQL query to fetch supplier information
$sql = "SELECT * FROM suppliers WHERE Spplr_type = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $id_supplr = $row["supplier_id"];
        $sid = $row["supplier_id"];
        $sname = $row["supplier_name"];
        $scname = $row["contact_name"];
        $semail = $row["email"];
        $spnumber = $row["phone_number"];
        $saddress = $row["address"];
        echo "<tr>";
        echo "<td style='font-size: 16;'>" . $row["supplier_id"] . "</td>";
        echo "<td style='font-size: 16;'>" . $row["supplier_name"] . "</td>";
        echo "<td style='font-size: 16;'>" . $row["contact_name"] . "</td>";
        echo "<td style='font-size: 16;'>" . $row["email"] . "</td>";
        echo "<td style='font-size: 16;'>" . $row["phone_number"] . "</td>";
        echo "<td style='font-size: 16;'>" . $row["address"] . "</td>";
        // Action buttons for editing and archiving
        echo "<td style='color: var(--bs-success);text-align: center;'>";
        echo "<a href='#' class='btn btn-success btn-icon-split' role='button' style='border-style: none;padding-top: 0px;margin: 5px;margin-right: 5px;' data-bs-target='#edit-supplier-modal' data-bs-toggle='modal' data-sid='$sid' data-sname='$sname' data-scname='$scname' data-semail='$semail' data-spnumber='$spnumber' data-saddress='$saddress' onclick='handleEditClick(this)'>";
        echo "<span class='text-white-50 icon' style='margin-right: 0px;padding: 2px 8px;background: var(--bs-yellow);'>";
        echo "<i class='far fa-edit' style='color: var(--bs-btn-color);font-size: 14px;transform: translate(2px);'></i>";
        echo "</span>";
        echo "</a>";        
        



        // Passing supplier_id to JavaScript function handleArchiveButtonClick
        echo "<a href='#' class='btn btn-success btn-icon-split' role='button' style='border-style: none;padding-top: 0px;margin: 5px;margin-right: 5px;' onclick='handleArchiveClick($id_supplr)' >";
        echo "<span class='text-white-50 icon' style='margin-right: 0px;padding: 2px 8px;background: var(--bs-orange);color: var(--bs-orange);width: 32px;'>";
        echo "<i class='far fa-file-archive' style='color: var(--bs-btn-color);'></i>";
        echo "</span>";
        echo "</a>";
        echo "</td>";
        echo "</tr>";

    }
} else {
    echo "<tr><td colspan='7'>No suppliers available</td></tr>";
}

// Close database connection
$conn->close();
?>