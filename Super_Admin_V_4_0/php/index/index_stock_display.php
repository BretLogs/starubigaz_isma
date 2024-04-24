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
$sql = "SELECT inv.inventory_id, p.product_name, inv.quantity, inv.inv_limit
        FROM inventory inv 
        JOIN products p ON inv.product_id = p.product_id
        WHERE inv_type = 1
        ORDER BY inv.quantity ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $limitI = $row["inv_limit"];
        $quantity = $row["quantity"];
        $color = ($quantity < $limitI) ? 'var(--bs-red)' : 'var(--bs-green)';
        echo "<tr>
                <td>" . $row["inventory_id"] . "</td>
                <td>" . $row["product_name"] . "</td>
                <td style='color: $color'>" . $quantity . "</td>
              </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
