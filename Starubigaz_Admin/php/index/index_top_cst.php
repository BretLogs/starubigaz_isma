<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user_id from the $_GET parameter
$user_id = $_GET['user_id'];

// SQL query to get the branch_id based on the user_id
$sql_branch = "SELECT branch_id FROM branches WHERE user_id = $user_id";

$result_branch = mysqli_query($conn, $sql_branch);

if ($result_branch) {
    // Check if any rows were returned
    if (mysqli_num_rows($result_branch) > 0) {
        // Fetch the first row (assuming there's only one branch per user)
        $row = mysqli_fetch_assoc($result_branch);
        $branch_id = $row['branch_id'];

        // Get the current month and year
        $currentMonth = date('m', strtotime('last month'));
        $currentYear = date('Y');

        // SQL query to get the top 5 users with the highest total points redeemed for the current month
        $sql = "SELECT u.user_id, u.username, u.user_reward_pts, SUM(t.points) AS total_points_redeemed
                FROM users u
                LEFT JOIN transactions t ON u.user_id = t.user_id AND t.transaction_type = 'Redeem'
                LEFT JOIN branch_customer b ON b.user_id = u.user_id
                WHERE YEAR(t.transaction_date) = $currentYear AND MONTH(t.transaction_date) = $currentMonth
                AND  b.branch_id = $branch_id
                GROUP BY u.user_id
                ORDER BY total_points_redeemed DESC
                LIMIT 5";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            $rank = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr style='text-align: center; background: rgba(255, 255, 71, " . (0.6 - ($rank * 0.1)) . ");'>";
                echo "<td style='font-size: 20px;font-weight: bold;text-align: center;'>" . $rank . "</td>";
                echo "<td>" . $row["user_id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td style='color: var(--bs-table-color);'>" . $row["user_reward_pts"] . "</td>";
                echo "</tr>";
                $rank++;
            }
        } else {
            echo "0 results";
        }
    } else {
        echo "No branch found for user ID: $user_id";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
$conn->close();
?>
