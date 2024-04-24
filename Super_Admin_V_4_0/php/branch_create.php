<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from modal form
$branchName = $_POST['branch_name'];
$fullAddress = $_POST['full_address'];

// Set branch_type and user_id
$branchType = 1;
$userId = null;

// Prepare SQL statement to insert data into branches table
$sql = "INSERT INTO branches (branch_name, full_address, user_id, branch_type)
        VALUES (?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssii", $branchName, $fullAddress, $userId, $branchType);

// Execute the statement
if ($stmt->execute() === TRUE) {
    echo '<script>alert("Branch created successfully.");</script>';
            // Redirect using JavaScript after the alert is closed
            echo '<script>window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
            exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
