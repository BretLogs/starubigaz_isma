<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Query to retrieve the list of suppliers
$sql = "SELECT * FROM suppliers WHERE Spplr_type = 1";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {

        echo "<option value='" . $row["supplier_id"] . "'>" . $row["supplier_name"] . "</option>";

    }
} else {
    echo "<option value='0'>No suppliers available</option>";
}

// Close the database connection
$conn->close();
?>