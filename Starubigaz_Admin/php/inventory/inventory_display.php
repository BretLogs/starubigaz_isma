<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2"; // Replace with your actual database name
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve product and inventory data
// $sql = "SELECT p.product_name, i.quantity, p.prod_image FROM products p JOIN inventory i ON p.product_id = i.product_id";
$sql = "SELECT
            inv.inventory_id,
            prod.product_name,
            prod.Prod_type,
            prod.price,
            prod.prod_image,
            supp.supplier_name,
            prod.expiration_date,
            inv.quantity
        FROM
            inventory inv
        JOIN
            products prod ON inv.product_id = prod.product_id
        JOIN
            suppliers supp ON prod.supplier_id = supp.supplier_id
        WHERE
            inv.Inv_Type = 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><img src='/Super_Admin_V_4_0/php/inventory/images/".basename($row["prod_image"])."' style='height: 50px; border-radius: 5px;'></td>";
        echo "<td style='font-size: 16px;'>".$row["inventory_id"]."</td>";
        echo "<td style='font-size: 16px;'>".$row["product_name"]."</td>";
        echo "<td style='font-size: 16px;'>".$row["Prod_type"]."</td>";
        echo "<td style='font-size: 16px;'>".$row["price"]."</td>";
        echo "<td style='font-size: 16px;'>".$row["supplier_name"]."</td>";
        echo "<td style='font-size: 16px;'>".$row["expiration_date"]."</td>";
        echo "<td style='font-size: 16px;'>".$row["quantity"]."</td>";
        echo "</tr>";
    }
} else {
    echo "<td colspan='7'>No results found</td>";
}
$conn->close();
?>