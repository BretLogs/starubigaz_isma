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
$user_id = $_GET['user_id'];

// Prepare and execute query to fetch branch ID based on user ID
$sql_branch = "SELECT branch_id FROM branches WHERE user_id = ?";
$stmt_branch = $conn->prepare($sql_branch);
$stmt_branch->bind_param("i", $user_id);
$stmt_branch->execute();
$result_branch = $stmt_branch->get_result();
if ($result_branch->num_rows > 0) {
    // Fetch branch ID
    $row_branch = $result_branch->fetch_assoc();
    $branch_id = $row_branch['branch_id'];
}

// Prepare and execute query to fetch transaction records with order details for users in the current branch
$sql = "SELECT DISTINCT t.transaction_date, t.transaction_id, o.order_id, o.order_date, 
               t.points, rc.reward_id, u.username,
               SUM(oi.quantity * oi.price) AS total_amount
        FROM transactions t
        LEFT JOIN orders o ON t.order_id = o.order_id
        LEFT JOIN reward_claims rc ON t.claim_id = rc.claim_id
        LEFT JOIN order_items oi ON o.order_id = oi.order_id
        LEFT JOIN products p ON oi.product_id = p.product_id
        LEFT JOIN branch_customer bc ON t.user_id = bc.user_id
        LEFT JOIN users u ON t.user_id = u.user_id
        WHERE bc.branch_id = ? AND t.transaction_type='Purchase'
        GROUP BY t.transaction_id
        ORDER BY t.transaction_date DESC";


$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $branch_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Output data of each row
    while (($row = $result->fetch_assoc())) {
        $order_id = $row['order_id'];
        $order_date = $row['transaction_date'];
        $point = $row['points'];
        $transaction_id = $row['transaction_id'];
        echo '<tr>
                <td>' . $order_date . '</td>
                <td>' . $transaction_id . '</td>';

        $total_price = 0;
        $stmt = $conn->prepare("SELECT SUM(quantity * price) AS total_price FROM order_items WHERE order_id = ?");
        $stmt->bind_param("i", $order_id);
        $stmt->execute();
        $result_total_price = $stmt->get_result();
        if ($result_total_price->num_rows > 0) {
            $row_total_price = $result_total_price->fetch_assoc();
            $total_price = $row_total_price['total_price'];
        }
        $stmt->close();
        echo '<td>P' . number_format($total_price, 2) . '</td>';
        $modal_id = "receipt-modal-" . ($order_id) . '-' . uniqid(); // Ensure uniqueness
        if ($row['reward_id']) {
            echo '<td style="color: var(--bs-red);">-' . number_format($point, 2) . '</td>';
            echo '<td class="text-center">
                <button class="btn" type="submit" style="border-style: none;" data-bs-target="#' . $modal_id . '" data-bs-toggle="modal" disabled>
                    <i class="fas fa-receipt"></i>&nbsp;Receipt
                </button>
              </td>
        </tr>';
        } else {
            echo '<td style="color: var(--bs-green);">+' . number_format($point, 2) . '</td>';
            echo '<td class="text-center">
                <button class="btn" type="submit" style="border-style: none;" data-bs-target="#' . $modal_id . '" data-bs-toggle="modal">
                    <i class="fas fa-receipt"></i>&nbsp;Receipt
                </button>
              </td>
        </tr>';
        }

        // Display receipt button with data attribute for the modal ID
        
        


        // Generate the modal HTML for each transaction
        echo '<div class="modal fade" role="dialog" tabindex="-1" id="' . $modal_id . '">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Receipt - ' . ($transaction_id) . '</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <p>Reference ID:&nbsp;<span>' . ($order_id ? $order_id : $claim_id) . '</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <p>Date:&nbsp;<span>' . $order_date . '</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <p>Points:&nbsp;<span>' . number_format($point, 2) . '</span></p>
                                        </div>
                                    </div>
                                    
                                    <hr>
                                    <div class="receipt-contents" style="height: 50vh;overflow-y: scroll;">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="text-end" style="font-weight: bold;">Sub Total</h6>
                                            </div>
                                        </div>';
        $order_items_query = "SELECT oid.quantity, pr.product_name, oid.price FROM order_items oid JOIN products pr ON oid.product_id = pr.product_id WHERE order_id = ?";
        $stmt_order_items = $conn->prepare($order_items_query);
        $stmt_order_items->bind_param("i", $order_id);
        $stmt_order_items->execute();
        $result_order_items = $stmt_order_items->get_result();

        // Output each order item
        while ($row_order_item = $result_order_items->fetch_assoc()) {
            echo '
        <div class="d-flex justify-content-between">
            <p class="d-inline">' . $row_order_item['product_name'] . ' x' . $row_order_item['quantity'] . '</p>
            <p class="d-inline">P' . number_format($row_order_item['price'], 2) . '</p>
        </div>';
        }

        $stmt_order_items->close();

        echo '</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                        <div class="col-md-4">
                        <div>
                            <p>Total amount:&nbsp;<span>' . number_format($total_price, 2) . '</span></p>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
} else {
    echo "No transactions found.";
}
$conn->close();
?>