<?php


// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "strarubigazV2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission for updating branch
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $branch_id = $_POST['branch_id_test'];
    $new_branch_name = $_POST['branch_name'];
    $new_full_address = $_POST['full_address'];

    $urlLinkMain = "http://localhost/Super_Admin_V_4_0/branch_information.php";
    $modifiedUrl = "$urlLinkMain?branch_id=$branch_id&branch_name=$new_branch_name&full_address=$new_full_address"; 


    // Update branch information in the database
    $sql = "UPDATE branches SET branch_name='$new_branch_name', full_address='$new_full_address' WHERE branch_id=$branch_id";

    if ($conn->query($sql) === TRUE) {
        $directory = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

        // Redirect to the branch display page without the "php/branch_information/" segment
        echo '<script>window.location.href = "' . $modifiedUrl . '";</script>';
        exit(); // Ensure that script execution stops after the redirection
} else {
    echo "Error updating branch: " . $conn->error;
} 
}

// Close connection
$conn->close();
// ' . $directory . '/branch_information.php?branch_id=' . $branch_id . '&branch_name=' . urlencode($new_branch_name) . '&full_address=' . urlencode($new_full_address) . '
?>