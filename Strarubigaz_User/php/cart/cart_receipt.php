<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user_id from URL parameter
$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : null;

// Prepare and execute query to fetch the latest pending order ID for the user
$stmt = $conn->prepare("SELECT order_id, branch_id, order_date FROM orders WHERE status = 'Pending' AND user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $order_id = $row['order_id'];
    $order_date = $row['order_date'];

    $total_price = 0;

    // Prepare and execute query to fetch order items for the given order ID
    $stmt = $conn->prepare("SELECT oi.product_id, oi.quantity, oi.price, p.product_name FROM order_items oi JOIN products p ON oi.product_id = p.product_id WHERE oi.order_id = ?");
    $stmt->bind_param("i", $order_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<div class="modal fade" role="dialog" tabindex="-1" id="receipt-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Checkout</h4><button type="button" class="btn-close" aria-label="Close" onclick="redirectCloseModal()">

                </div>
        <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <p>Order ID:&nbsp;<span>' . $order_id . '</span></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <p>Date:&nbsp;<span>' . $order_date . '</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h6 style="margin-bottom: 0px;">Order Summary</h6>
                <div style="height: 50vh;overflow-y: scroll;">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Quantity</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>';

        // Loop through the order items and calculate total price
        // Start a transaction
        $conn->begin_transaction();

        // Update total price
        $total_price = 0;

        // Loop through the order items and calculate total price
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
            <td>' . $row['quantity'] . '</td>
            <td>' . $row['product_name'] . '</td>
            <td style="font-weight: bold;">P' . number_format($row['price'], 2) . '</td>
          </tr>';
            // Update total price
            $total_price += $row['price'] * $row['quantity'];

            $product_id = $row['product_id'];
            $quantity = $row['quantity'];
            // Update inventory
            $stmt = $conn->prepare("UPDATE inventory SET quantity = quantity - ? WHERE product_id = ?");
            $stmt->bind_param("ii", $quantity, $product_id);
            $stmt->execute();
        }

        // Calculate points earned based on total price
        $points_earned = number_format(($total_price / 50) * 10,2);

        // Update order status to Completed
        $stmt = $conn->prepare("UPDATE orders SET status = 'Completed' WHERE order_id = ?");
        $stmt->bind_param("i", $order_id);
        $stmt->execute();

        // Insert transaction record
        $transaction_type = "Purchase";
        $stmt = $conn->prepare("INSERT INTO transactions (order_id,user_id, transaction_type, points) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iisi",$order_id, $user_id, $transaction_type, $points_earned);
        $stmt->execute();
        $transaction_id = $stmt->insert_id;

        // Update user's points
        $stmt = $conn->prepare("UPDATE users SET user_reward_pts = user_reward_pts + ? WHERE user_id = ?");
        $stmt->bind_param("di", $points_earned, $user_id);
        $stmt->execute();

        // Commit transaction
        $conn->commit();


        // Display total price
        echo '</tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <p style="font-size: 20px;">Points Earned:&nbsp;<span style="font-weight: bold;">' . number_format($points_earned, 2) . '</span></p>
          <p style="font-size: 20px;">Total :&nbsp;<span style="font-weight: bold;">P' . number_format($total_price, 2) . '</span></p>
        </div>
        </div>
        </div>
    </div>';
        
    } else {
        echo "No order items found for the given order ID.";
    }
} else {
    echo "No orders found with 'Pending' status.";
}

// Close connection
$conn->close();
?>