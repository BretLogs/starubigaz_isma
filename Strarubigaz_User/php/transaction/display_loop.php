<?php
 // Fetch order items for this order
 $order_items_query = "SELECT quantity, product_name, price FROM order_items oi JOIN products p ON oi.product_id = p.product_id WHERE order_id = ?";
 $stmt_order_items = $conn->prepare($order_items_query);
 $stmt_order_items->bind_param("i", $order_id);
 $stmt_order_items->execute();
 $result_order_items = $stmt_order_items->get_result();
 
 // Output each order item
 while ($row_order_item = $result_order_items->fetch_assoc()) {
     echo '
         <div class="d-flex justify-content-between">
             <p class="d-inline">' . $row_order_item['quantity'] . '</p>
             <p class="d-inline">' . $row_order_item['product_name'] . '</p>
             <p class="d-inline">P' . number_format($row_order_item['price'], 2) . '</p>
         </div>';
 }
 
 $stmt_order_items->close();
?>