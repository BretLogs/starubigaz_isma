<?php
// Establish database connection (Replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $given_name = htmlspecialchars($_POST["username"]);
    $last_name = htmlspecialchars($_POST["lastname"]);
    $username = $given_name . " " . $last_name;
    $email = htmlspecialchars($_POST["email"]);
    $mobile_number = htmlspecialchars($_POST["mobile_number"]);
    
    // Hardcoded password for demonstration
    $password = "123"; 
    
    // Default values
    $role = "Customer"; // Default role
    $userpts = 50;
    $user_type = 1; // Default user type
    
    // Prepare and execute SQL statement to insert data into users table
    $sql = "INSERT INTO users (username, password, role, email, phone_number, user_reward_pts,user_type) VALUES (?, ?, ?, ?, ?, ?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $username, $password, $role, $email, $mobile_number,$userpts, $user_type);

    if ($stmt->execute() === TRUE) {

        // Get the ID of the newly inserted user
        $user_id = $stmt->insert_id;

        // Assuming branch_id is already set (you can modify this part accordingly)
        $branch_id = $_POST["branch_id"];

        // Prepare and execute SQL statement to insert data into branch_customer table
        $sql_branch = "INSERT INTO branch_customer (branch_id, user_id, Bcst_type) VALUES (?, ?,1)";
        $stmt_branch = $conn->prepare($sql_branch);
        $stmt_branch->bind_param("ii", $branch_id, $user_id);
        if ($stmt_branch->execute() === TRUE) {
            echo '<script>alert("User registered in ' . $branch_id . '!"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';

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
