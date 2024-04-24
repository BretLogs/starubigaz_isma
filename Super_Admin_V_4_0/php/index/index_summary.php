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

$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];
$ends_date = date('Y-m-d', strtotime($end_date . ' +1 day'));

// Check if branch_id is provided in the URL parameters
if (isset($_GET['branch_id']) && !empty($_GET['branch_id'])) {
    $branch_id = $_GET['branch_id'];
    // SQL query with branch filter
    if (!empty($start_date) && !empty($end_date)) {
        $sql = "SELECT DATE(t.transaction_date) AS date, 
                       SUM(oi.quantity * oi.price) AS overall_revenue,
                       SUM(oi.quantity * p.base_price) AS overall_revenue_bprice
                FROM transactions t
                INNER JOIN orders o ON t.order_id = o.order_id
                INNER JOIN order_items oi ON o.order_id = oi.order_id
                INNER JOIN products p ON oi.product_id = p.product_id
                INNER JOIN branches b ON o.branch_id = b.branch_id
                WHERE t.transaction_date BETWEEN '$start_date' AND '$ends_date'
                AND b.branch_id = $branch_id
                GROUP BY DATE(t.transaction_date)";
    } else {
        // SQL query without date filter
        $sql = "SELECT DATE(t.transaction_date) AS date, 
                       SUM(oi.quantity * oi.price) AS overall_revenue,
                       SUM(oi.quantity * p.base_price) AS overall_revenue_bprice
                FROM transactions t
                INNER JOIN orders o ON t.order_id = o.order_id
                INNER JOIN order_items oi ON o.order_id = oi.order_id
                INNER JOIN products p ON oi.product_id = p.product_id
                INNER JOIN branches b ON o.branch_id = b.branch_id
                WHERE b.branch_id = $branch_id
                GROUP BY DATE(t.transaction_date)";
    }
} else {
    // SQL query without branch filter
    if (!empty($start_date) && !empty($end_date)) {
        $sql = "SELECT DATE(t.transaction_date) AS date, 
                       SUM(oi.quantity * oi.price) AS overall_revenue,
                       SUM(oi.quantity * p.base_price) AS overall_revenue_bprice
                FROM transactions t
                INNER JOIN orders o ON t.order_id = o.order_id
                INNER JOIN order_items oi ON o.order_id = oi.order_id
                INNER JOIN products p ON oi.product_id = p.product_id
                WHERE t.transaction_date BETWEEN '$start_date' AND '$ends_date'
                GROUP BY DATE(t.transaction_date)";
    } else {
        // SQL query without branch and date filter
        $start_date = date('Y-m-d', strtotime('monday this week'));
        $ends_date = date('Y-m-d', strtotime('sunday this week'));
        $sql = "SELECT DATE(t.transaction_date) AS date, 
        SUM(oi.quantity * oi.price) AS overall_revenue,
        SUM(oi.quantity * p.base_price) AS overall_revenue_bprice
        FROM transactions t
        INNER JOIN orders o ON t.order_id = o.order_id
        INNER JOIN order_items oi ON o.order_id = oi.order_id
        INNER JOIN products p ON oi.product_id = p.product_id
        WHERE t.transaction_date BETWEEN '$start_date' AND '$ends_date'
        GROUP BY DATE(t.transaction_date)";
    }
}


$result = mysqli_query($conn, $sql);

$data = array();

// Fetch data and format it according to JSON structure
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = array(
        'date' => date('F j', strtotime($row['date'])),
        'overall revenue of price in order_id' => $row['overall_revenue'],
        'overall revenue of price in order_id but bprice' => $row['overall_revenue_bprice']
    );
}

// Close database connection
mysqli_close($conn);

// Encode data as JSON
$json_data = json_encode(
    array(
        'data' => $data
    )
);

// Output JSON
header('Content-Type: application/json');
echo $json_data;
?>