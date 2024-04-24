<?php
if(isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

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

    // Fetch branch name associated with user ID
    $sql = "SELECT branch_name FROM branches WHERE user_id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output branch name
        $row = $result->fetch_assoc();
        $branch_name = $row['branch_name'];
        echo $branch_name;
    } else {
        echo "No branch found for the user.";
    }

    // Close connection
    $conn->close();
}
?>
