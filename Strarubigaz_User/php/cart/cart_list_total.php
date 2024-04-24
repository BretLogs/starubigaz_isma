<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;
$stmt = $conn->prepare("SELECT order_id FROM orders WHERE status = 'Pending' AND user_id = $user_id ORDER BY order_date DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $order_id = $row['order_id'];
} else {
    echo "No orders found with 'Pending' status.";
    exit; // Exit the script if no pending order is found
}
$stmt = $conn->prepare("SELECT oi.quantity, oi.price, p.product_name FROM order_items oi JOIN products p ON oi.product_id = p.product_id WHERE oi.order_id = ?");
$stmt->bind_param("i", $order_id);
$stmt->execute();
$result = $stmt->get_result();
$total_price = 0; // Initialize total price

if ($result->num_rows > 0) {
    echo'<thead>
    <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Sub Total</th>
    </tr>
</thead>
<tbody>';
    while ($row = $result->fetch_assoc()) {
        $quantity = $row['quantity'];
        $price = $row['price'];
        $product_name = $row['product_name'];

        $item_total = $quantity * $price;
        $total_price += $item_total;

        echo '
        <tr style="border-color: rgb(255,255,255);">
            <td>' . $product_name . '</td>
            <td>' . $quantity . '</td>
            <td>' . $price . '</td>
            <td>' . number_format($price *$quantity,2)  . '</td>
        </tr>';
    }
    echo '<tr style="border-color: rgb(255,255,255);">

    <td style="font-weight: bold;text-align: right;border-top: 2px solid var(--bs-table-color);"></td>
    <td style="font-weight: bold;text-align: right;border-top: 2px solid var(--bs-table-color);"></td>
    <td style="font-weight: bold;text-align: right;border-top: 2px solid var(--bs-table-color);">Total :</td>
    <td style="font-weight: bold;text-align: right;border-top: 2px solid rgb(45,45,45);font-size: 23px;">'.number_format($total_price,2).'</td>
</tr>
</tbody>
</table>
</div>
';
} else {
    echo "No order items found for the given order ID.";
}
$conn->close();
?>