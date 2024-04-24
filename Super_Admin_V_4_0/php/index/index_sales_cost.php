<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";
echo"<script>reload()</script>";

if (isset($_GET['start_date']) && isset($_GET['end_date']) && isset($_GET['branch_id'])) {

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];
    $branch_id = $_GET['branch_id'];


    $ends_date = date('Y-m-d', strtotime($end_date . ' +1 day'));


    $sql_cost = "";
    $sql2 = "";


    if (!empty($branch_id)) {

        if (!empty($start_date) && !empty($end_date)) {

            $sql_cost = "SELECT DATE(t.transaction_date) AS date, 
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

            $sql2 = "SELECT COUNT(*) AS num_transactions
                     FROM transactions t
                     INNER JOIN orders o ON t.order_id = o.order_id
                     INNER JOIN branches b ON o.branch_id = b.branch_id
                     WHERE t.transaction_date BETWEEN '$start_date' AND '$ends_date'
                     AND b.branch_id = $branch_id";
        } else {

            $sql_cost = "SELECT DATE(t.transaction_date) AS date, 
                           SUM(oi.quantity * oi.price) AS overall_revenue,
                           SUM(oi.quantity * p.base_price) AS overall_revenue_bprice
                    FROM transactions t
                    INNER JOIN orders o ON t.order_id = o.order_id
                    INNER JOIN order_items oi ON o.order_id = oi.order_id
                    INNER JOIN products p ON oi.product_id = p.product_id
                    INNER JOIN branches b ON o.branch_id = b.branch_id
                    WHERE b.branch_id = $branch_id
                    GROUP BY DATE(t.transaction_date)";

            $sql2 = "SELECT COUNT(*) AS num_transactions
                     FROM transactions t
                     INNER JOIN orders o ON t.order_id = o.order_id
                     INNER JOIN branches b ON o.branch_id = b.branch_id
                     WHERE b.branch_id = $branch_id";
        }
    } else {

        if (!empty($start_date) && !empty($end_date)) {

            $sql_cost = "SELECT DATE(t.transaction_date) AS date, 
                           SUM(oi.quantity * oi.price) AS overall_revenue,
                           SUM(oi.quantity * p.base_price) AS overall_revenue_bprice
                    FROM transactions t
                    INNER JOIN orders o ON t.order_id = o.order_id
                    INNER JOIN order_items oi ON o.order_id = oi.order_id
                    INNER JOIN products p ON oi.product_id = p.product_id
                    WHERE t.transaction_date BETWEEN '$start_date' AND '$ends_date'
                    GROUP BY DATE(t.transaction_date)";

            $sql2 = "SELECT COUNT(*) AS num_transactions
                     FROM transactions t
                     INNER JOIN orders o ON t.order_id = o.order_id
                     INNER JOIN branches b ON o.branch_id = b.branch_id
                     WHERE t.transaction_date BETWEEN '$start_date' AND '$ends_date'";
        } else {

            $start_date = date('Y-m-d', strtotime('monday this week'));
            $ends_date = date('Y-m-d', strtotime('sunday this week'));

            $sql_cost = "SELECT DATE(t.transaction_date) AS date, 
                           SUM(oi.quantity * oi.price) AS overall_revenue,
                           SUM(oi.quantity * p.base_price) AS overall_revenue_bprice
                    FROM transactions t
                    INNER JOIN orders o ON t.order_id = o.order_id
                    INNER JOIN order_items oi ON o.order_id = oi.order_id
                    INNER JOIN products p ON oi.product_id = p.product_id
                    WHERE t.transaction_date BETWEEN '$start_date' AND '$ends_date'
                    GROUP BY DATE(t.transaction_date)";

            $sql2 = "SELECT COUNT(*) AS num_transactions
                     FROM transactions t
                     INNER JOIN orders o ON t.order_id = o.order_id
                     INNER JOIN branches b ON o.branch_id = b.branch_id
                     WHERE t.transaction_date BETWEEN '$start_date' AND '$ends_date'";;
        }
    }


    $result = mysqli_query($conn, $sql_cost);
    $result2 = mysqli_query($conn, $sql2);


    $total_sales = 0;
    $total_transactions = 0;


    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = array(
            'date' => date('F j', strtotime($row['date'])),
            'overall_revenue' => $row['overall_revenue'],
            'overall_revenue_bprice' => $row['overall_revenue_bprice']
        );

        $total_sales += $row['overall_revenue'];
    }


    while ($row_count = mysqli_fetch_assoc($result2)) {
        $total_transactions = $row_count["num_transactions"];
    }


    $conn->close();
} else {
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
