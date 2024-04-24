<?php
// Database connection
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

// SQL query to retrieve data
$sql = "SELECT p.product_name, inv.quantity 
        FROM inventory inv 
        JOIN products p ON inv.product_id = p.product_id
        WHERE inv.Inv_Type = 1
        ORDER BY inv.quantity ";

$result = $conn->query($sql);

// Initialize arrays to store data
$product_names = [];
$stock_counts = [];
$limits = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $product_names[] = $row["product_name"];
        $stock_counts[] = $row["quantity"];
        // Assuming you have a separate table for limits or a way to determine the limit for each product
        // You can fetch the limit data similarly from your database
        // For demonstration, I'll set a default limit of 100 for each product
        $limits[] = 100;
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>

<canvas data-bss-chart='{"type":"bar","data":{"labels":<?php echo json_encode($product_names); ?>,"datasets":[{"label":"Stock Count","backgroundColor":"#320889","borderColor":"#ffffff","data":<?php echo json_encode($stock_counts); ?>},{"label":"Limit","backgroundColor":"#ff7171","borderColor":"#ffffff","data":<?php echo json_encode($limits); ?>}]},"options":{"maintainAspectRatio":true,"legend":{"display":true,"labels":{"fontStyle":"normal"}},"title":{"fontStyle":"bold"},"scales":{"xAxes":[{"ticks":{"fontStyle":"normal"}}],"yAxes":[{"ticks":{"fontStyle":"normal"}}]}}}'></canvas>
