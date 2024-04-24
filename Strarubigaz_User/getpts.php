<?php 
if(isset($_GET['user_id']) ){
    $iduser = $_GET['user_id'];

    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "strarubigazV2"; // Replace with your actual database name
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to retrieve the name of the user
    $sql = "SELECT user_reward_pts FROM users WHERE user_id = $iduser";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of the user
        $row = $result->fetch_assoc();
        $pts = $row["user_reward_pts"];
        echo''.$pts.'';
    } else {
        echo "No user found with ID $iduser";
    }

    // Close connection
    $conn->close();
}
?>
