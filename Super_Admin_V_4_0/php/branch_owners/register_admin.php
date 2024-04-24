<?php
// Establish database connection (Replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $given_name = htmlspecialchars($_POST["given_name"]);
    $last_name = htmlspecialchars($_POST["last_name"]);
    $uname = $given_name . " " . $last_name;

    $email = htmlspecialchars($_POST["email"]);
    $phone_number = htmlspecialchars($_POST["mobile_number"]); // Assuming mobile number is in the input with id "username-3"
    
    // Validate branch_id
    $branch_id = $_POST["branch_id"];
    if ($branch_id == 0) {
        echo '<script>alert("Please select a branch.");</script>';
        echo '<script>window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
        exit;
    }
    
    // Check if any field is empty
    if (empty($given_name) || empty($last_name) || empty($email) || empty($phone_number)) {
        echo '<script>alert("Please fill in all the fields.");</script>';
        echo '<script>window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
        exit;
    }

    // Hardcoded password for demonstration
    $password = "123"; 
    
    // Default values
    $role = "Admin"; // Default role
    $user_type = 1; // Default user type
    
    // Prepare and execute SQL statement to insert data into users table
    $sql = "INSERT INTO users (username, password, role, email, phone_number, user_type) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $uname, $password, $role, $email, $phone_number, $user_type);

    if ($stmt->execute() === TRUE) {

        // Get the ID of the newly inserted user
        $user_id = $stmt->insert_id;

        // Update the branch table to assign the user to the selected branch
        $update_sql = "UPDATE branches SET user_id = ? WHERE branch_id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("ii", $user_id, $branch_id);
        if ($update_stmt->execute() === TRUE) {
            // Display JavaScript alert
            echo '<script>alert("Admin user created successfully.");</script>';
            // Redirect using JavaScript after the alert is closed
            echo '<script>window.location.href = "'.$_SERVER['HTTP_REFERER'].'";</script>';
            exit;
        } else {
            echo "Error assigning user to branch: " . $conn->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>