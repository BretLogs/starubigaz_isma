<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have a product_id to display information for
// You might get this from a URL parameter, for example: ?product_id=1
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;

if ($product_id) {
    // Prepare and execute the SQL query to fetch the product and its inventory details
    $stmt = $conn->prepare("SELECT p.product_id, p.product_name, p.prod_image, p.price, i.quantity FROM products p JOIN inventory i ON p.product_id = i.product_id WHERE p.product_id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();

    // Check if there is a product
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $quantity = $row["quantity"];

        echo '
        <div class="row">
            <div class="col-md-6 text-center"><img src="/Super_Admin_V_4_0/php/inventory/images/' . $row["prod_image"] . '" style="width: 300px;border-radius: 10px;"></div>
            <div class="col-md-6">
                <div></div>
                <div class="row">
                    <div class="col">
                        <h1 style="margin-bottom: 0px;">' . $row["product_name"] . '</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="display: inline;">In Stock:&nbsp;<span style="font-weight: bold;">' . $quantity . '</span></p>
                        <hr>
                        <p style="display: inline;">Price:&nbsp;<span style="font-weight: bold;">' . $row["price"] . '</span></p>
                    </div>
                </div>
                <div class="row" style="padding-top: 12px;padding-bottom: 12px;">
                
                
                
                
                
                ';

        

        // Check if quantity is 0
        if ($quantity == 0) {
            echo '<p style="color: red;">Item is not available</p>';
        } else {
            echo '
                <form action="php/item_information/add_cart.php" method="POST">
                    <input type="hidden" name="user_id" value='.$user_id.'>
                    <input type="hidden" name="product_id" value='.$product_id.'>
                    <div class="col" style="text-align: center; margin-top: 12px">
                        <p class="d-xxl-flex align-items-xxl-center">Items :&nbsp;
                            <input class="form-control-sm inc-rmv" type="number" min="1" max="'. $quantity .'" id="quantity" name="quantity" placeholder="1" value="1" style="border-radius: 4px;border-width: 1px;border-color: var(--bs-gray-dark);font-size: 16px;text-align: center;width: 60px;">
                        </p>
                    </div>            
                    <div class="col d-xxl-flex align-items-xxl-center">
                        <button class="btn btn-primary" type="submit" style="border-radius: 2px;background: var(--bs-gray-dark);border-style: none;"><i class="fas fa-shopping-bag"></i>&nbsp; Add to Cart</button>
                    </div>
                </form>';
        }
        
        echo '
                </div>
            </div>
        </div>
        ';
    } else {
        echo "No product found.";
    }
} else {
    echo "No product ID provided.";
}

// Close the database connection
$conn->close();
?>
