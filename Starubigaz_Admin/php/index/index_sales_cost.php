<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";

// Check if start_date and end_date parameters are set
if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];
    $user_id = $_GET['user_id'];
    $ends_date = date('Y-m-d', strtotime($end_date . ' +1 day'));

    // Modify your SQL query to filter transactions based on the date range
    $sql = "SELECT DATE(t.transaction_date) AS date, 
                   SUM(oi.quantity * oi.price) AS overall_revenue,
                   SUM(oi.quantity * p.base_price) AS overall_revenue_bprice, t.transaction_id  
            FROM transactions t
            INNER JOIN orders o ON t.order_id = o.order_id
            INNER JOIN order_items oi ON o.order_id = oi.order_id
            INNER JOIN products p ON oi.product_id = p.product_id
            INNER JOIN branches b ON o.branch_id = b.branch_id
            WHERE t.transaction_date BETWEEN '$start_date' AND '$ends_date'
            AND b.branch_id IN (SELECT branch_id FROM branch_customer WHERE b.user_id = $user_id)
            GROUP BY DATE(t.transaction_date)";

    $sql2 = "SELECT COUNT(*) AS num_transactions
FROM transactions t
INNER JOIN orders o ON t.order_id = o.order_id
INNER JOIN branches b ON o.branch_id = b.branch_id
WHERE t.transaction_date BETWEEN '$start_date' AND '$ends_date'
AND b.branch_id IN (SELECT branch_id FROM branch_customer WHERE b.user_id = $user_id)";

    $count = 0;
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    while ($row_count = mysqli_fetch_assoc($result2)) {
        $count = $row_count["num_transactions"];
    }

    $data = array();

    // Fetch data and format it according to JSON structure
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = array(
            'date' => date('F j', strtotime($row['date'])),
            'overall revenue of price in order_id' => $row['overall_revenue'],
            'overall revenue of price in order_id but bprice' => $row['overall_revenue_bprice']
        );
        
    }

    // Calculate total sales
    $total_sales = 0;
    foreach ($data as $row) {
        $total_sales += $row['overall revenue of price in order_id'];
    }

    // Calculate total number of transactions
    $total_transactions = $count;

    // Close database connection
    mysqli_close($conn);
} else {
    // Placeholder message if start_date and end_date are not set
    $placeholder_message = "Please select start and end dates.";
}
?>
    <?php if (isset($placeholder_message)): ?>
        <p><?php echo $placeholder_message; ?></p>
    <?php else: ?>
        <div style="display: inline-flex;">
            <p class="m-0" style="font-weight: bold;color: #A1bdf3;font-size: 20px;">Total Sales : </p>
            <p class="m-0" style = "font-size: 20px; padding-left: 8px;"> ₱ <?php echo number_format($total_sales, 2); ?> </p>
        </div>
        <div style="display: inline-flex;">
            <p class="m-0" style="font-weight: bold;color: #320889;font-size: 20px;">Total Transactions : </p>
            <p class="m-0" style = "font-size: 20px; padding-left: 8px;"> <?php echo number_format($total_transactions); ?> </p>
        </div>

    <?php endif; ?>