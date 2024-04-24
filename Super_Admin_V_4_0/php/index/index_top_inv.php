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

// Get the current month and year
$currentMonth = date('m',strtotime('last month'));
$currentYear = date('Y');

// SQL query to get the top 5 products based on total sales for the current month
$sql = "SELECT oi.product_id, p.product_name, SUM(oi.quantity * oi.price) AS total_sales
        FROM order_items oi
        INNER JOIN products p ON oi.product_id = p.product_id
        INNER JOIN orders o ON oi.order_id = o.order_id
        WHERE YEAR(o.order_date) = $currentYear AND MONTH(o.order_date) = $currentMonth
        GROUP BY oi.product_id
        ORDER BY total_sales DESC
        LIMIT 5";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    $rank = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr style='text-align: center; background: rgba(28,200,138, " . (0.6 - ($rank * 0.1)) . ");'>";
        echo "<td style='font-size: 20px;font-weight: bold;text-align: center;'>" . $rank . "</td>";
        echo "<td>" . $row["product_id"] . "</td>";
        echo "<td>" . $row["product_name"] . "</td>";
        echo "<td style='color: var(--bs-table-color);'>P" . $row["total_sales"] . "</td>";
        echo "</tr>";
        $rank++;
    }
} else {
    echo "0 results";
} 
// Close connection
$conn->close();
?>
