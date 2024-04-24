<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['branch_id']) && !empty($_POST['branch_id'])) {

    $branch_id = mysqli_real_escape_string($conn, $_POST['branch_id']);

    $archiveBranchQuery = "UPDATE branches SET branch_type = 0,  user_id = NULL WHERE branch_id = '$branch_id'";
    if ($conn->query($archiveBranchQuery) === TRUE) {
        $archiveUsersQuery = "UPDATE users SET user_type = 0 WHERE user_id IN (SELECT user_id FROM branch_customer WHERE branch_id = '$branch_id')";
        if ($conn->query($archiveUsersQuery) === TRUE) {
            $archiveCustomersQuery = "UPDATE branch_customer SET Bcst_type = 0 WHERE branch_id = '$branch_id'";
            if ($conn->query($archiveCustomersQuery) === TRUE) {
                $archiveAdminsQuery = "UPDATE users SET user_type = 0 WHERE user_id IN (SELECT user_id FROM users WHERE role = 'Admin' AND user_id IN (SELECT user_id FROM branch_customer WHERE branch_id = '$branch_id'))";
                if ($conn->query($archiveAdminsQuery) === TRUE) {
                    $archiveCustomersTypeQuery = "UPDATE users SET user_type = 0 WHERE user_id IN (SELECT user_id FROM users WHERE role = 'Customer' AND user_id IN (SELECT user_id FROM branch_customer WHERE branch_id = '$branch_id'))";
                    if ($conn->query($archiveCustomersTypeQuery) === TRUE) {
                    } else {
                        echo "Error changing user_type for customers: " . $conn->error;
                    }
                } else {
                    echo "Error changing user_type for admins: " . $conn->error;
                }
            } else {
                echo "Error archiving branch customers: " . $conn->error;
            }
        } else {
            echo "Error archiving users: " . $conn->error;
        }
    } else {
        echo "Error archiving branch: " . $conn->error;
    }
} else {
    echo "Branch ID is not set or empty.";
}

// Close connection
$conn->close();
?>
