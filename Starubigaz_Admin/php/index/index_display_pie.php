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

$user_id = $_GET['user_id'];

// Get branch_id associated with the user_id
$sql_branch_id = "SELECT branch_id FROM branches WHERE user_id = $user_id";
$result_branch_id = mysqli_query($conn, $sql_branch_id);
$row_branch_id = mysqli_fetch_assoc($result_branch_id);
$branch_id = $row_branch_id['branch_id'];

// Get counts of active and inactive users for the specific branch
$sql_get_count = "SELECT 
    SUM(CASE WHEN u.user_type = 1 THEN 1 ELSE 0 END) AS active_user,
    SUM(CASE WHEN u.user_type = 0 THEN 1 ELSE 0 END) AS inactive_user
FROM 
    users u
INNER JOIN 
    branch_customer bc ON u.user_id = bc.user_id
WHERE 
    bc.branch_id = $branch_id";

$result_get_count = mysqli_query($conn, $sql_get_count);

$data = array();
while ($row_get_count = mysqli_fetch_assoc($result_get_count)) {
    $data[] = array(
        'count_active' => $row_get_count['active_user'],
        'count_inactive' => $row_get_count['inactive_user']
    );
}

// Close database connection
mysqli_close($conn);

// Encode data as JSON
$json_data = json_encode(array(
    'data' => $data
));

// Output JSON
header('Content-Type: application/json');
echo $json_data;
?>
