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
$branch_id = !empty($_GET['branch_id']) ? $_GET['branch_id'] : null;

// Initialize a condition variable for the branch filter
$branchCondition = "";

// Check if branch_id is not null
if ($branch_id !== null) {
    $branchCondition = "AND b.branch_id = $branch_id";
}

// Get the current month and year
$currentMonth = date('m',strtotime('last month'));
$currentYear = date('Y');

// SQL query to get the top 5 users with the highest total points redeemed for the current month
$sql = "SELECT u.user_id, u.username, u.user_reward_pts, SUM(t.points) AS total_points_redeemed
        FROM users u
        LEFT JOIN transactions t ON u.user_id = t.user_id AND t.transaction_type = 'Redeem'
        LEFT JOIN branch_customer b ON b.user_id = u.user_id
        WHERE YEAR(t.transaction_date) = $currentYear AND MONTH(t.transaction_date) = $currentMonth
        $branchCondition
        GROUP BY u.user_id
        ORDER BY total_points_redeemed DESC
        LIMIT 5";

$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<?php
// Display the results of the SQL query
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
?>