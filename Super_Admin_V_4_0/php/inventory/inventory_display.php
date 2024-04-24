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
$sql2 = "SELECT
            inv.inventory_id,
            prod.product_name,
            prod.Prod_type,
            prod.price,
            prod.base_price,
            prod.prod_image,
            supp.supplier_name,
            prod.expiration_date,
            inv.quantity,
            inv.inv_limit
        FROM
            inventory inv
        JOIN
            products prod ON inv.product_id = prod.product_id
        JOIN
            suppliers supp ON prod.supplier_id = supp.supplier_id
        WHERE
            inv.Inv_Type = 1
        ORDER BY
            inv.quantity ASC";

$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        $dateE=$row["expiration_date"];
        $expirationDateObj = DateTime::createFromFormat('Y-m-d', $dateE );
        $expirationDate = $expirationDateObj->format('Y-m-d');
        $quantity = $row["quantity"];
    $quantityColor = ($quantity < 100) ? 'red' : 'var(--bs-grey)';
    $warningIcon = ($quantity < 100) ? ' <i class="fas fa-exclamation-circle" style="color: rgb(255, 88, 88);"></i>' : '';
        echo '<div class="col-md-3" style="padding-bottom: 24px;">
                <div style="border-radius: 4px;padding: 4px;background: var(--bs-white);border: 1px none rgb(217,217,217);box-shadow: 0px 0px 12px var(--bs-gray-400);padding-left: 0px;padding-right: 0px;padding-bottom: 0px;overflow: hidden;">
                    <div class="d-xl-flex justify-content-xxl-center align-items-xxl-center" style="height: 200px;border-radius: 12px;margin-top: 12px;"><img class="border rounded border-1" style="height: 100%;" src="php/inventory/images/' . $row["prod_image"] . '"></div>
                    <div style="padding-left: 8px;">
                        <h5 style="font-weight: bold;color: var(--bs-gray-700);padding-top: 10px;margin-bottom: 0px;">' . $row["product_name"] . '</h5>
                        <p style="margin-bottom: 0px;">Stock: <span style="color: ' . $quantityColor . ';"> ' . $row["quantity"] . '</span> ' . $warningIcon . '</p>                    </div>
                    <div class="row">
                        <div class="col col-md5"><a class="btn btn-primary" role="button" style="padding-right: 10px;padding-left: 10px;background: var(--bs-btn-hover-bg);color: rgb(255,255,255);border-style: none;border-radius: 12px;width: 100%;margin-top: 10px;font-size: 16px;--bs-body-font-weight: normal;margin-bottom: 0px;border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;border-top-left-radius: 4px;border-top-right-radius: 4px;box-shadow: 0px 0px 8px var(--bs-gray);padding-bottom: 10px;opacity: 0.80;" href="rewards_information.html" data-bs-target="#display-items-' . $row["inventory_id"] . '" data-bs-toggle="modal">Check Item</a></div>
                    </div>
                </div>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="display-items-' . $row["inventory_id"] . '">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Item</h4><button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="php/inventory/inventory_edit.php" method="post" enctype="multipart/form-data">
                    <div class="d-xl-flex justify-content-xxl-center align-items-xxl-center"
                        style="height: 200px;background: rgba(197,197,197,0.19);border-radius: 10px;margin: 12px;margin-right: 0px;margin-left: 0px;margin-top: 0px;margin-bottom: 0px;">
                        <img class="border rounded border-1" style="height: 100%;" src="php/inventory/images/' . $row["prod_image"] . '">
                    </div>
                    <input type="file" id="prodimg" name="prodimg" accept=".jpg, .jpeg, .png" style="padding-bottom: 10px;margin-bottom: 4px;width: 100%;padding-top: 4px;">
                    <input type="hidden" id="old_prodimage" name="old_prodimage" style="padding-bottom: 10px;margin-bottom: 4px;width: 100%;padding-top: 4px;" value="' . $row["prod_image"] . '">
                    <div>
                        <h6 style="color: var(--bs-gray-dark);font-weight: bold;margin-bottom: 0px;">Manage</h6>
                        <hr style="margin-top: -1px;padding-top: 0px;padding-bottom: 0px;">
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Barcode</td>
                                        <td><input type="text"
                                                style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                value="' . $row["inventory_id"] . '" disabled="">
                                                <input type="hidden"
                                                id="inv_id" name="inv_id" style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                value="' . $row["inventory_id"] . '">
                                            <p class="text-end"
                                                style="color: var(--bs-danger);font-size: 8px;margin-bottom: 0px;">Edit
                                                unavailable</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Product</td>
                                        <td><input type="text"
                                                id="prodname" name="prodname" style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                placeholder="' . $row["product_name"] . '" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td><input type="text"
                                                id="prodtype" name="prodtype" style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                placeholder="' . $row["Prod_type"] . '" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td><input type="text"
                                                id="price" name="price" style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                placeholder="' . $row["price"] . '" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Base Price</td>
                                        <td><input type="text"
                                                id="bprice" name="bprice" style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                placeholder="' . $row["base_price"] . '" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Supplier</td>
                                        <td><input type="text"
                                                style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                placeholder="' . $row["supplier_name"] . '" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Expiration</td>
                                        <td><input type="text"
                                                id="expiration" name="expiration" style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                placeholder="' . $expirationDate . '" onblur=(this.type="text") onfocus=(this.type="date") value=""></td>
                                    </tr>
                                    <tr>
                                        <td>In Stock</td>
                                        <td><input type="text"
                                                id="stocks" name="stocks" style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                placeholder="' . $row["quantity"] . '" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>Stock Limit</td>
                                        <td><input type="text"
                                                id="inv_limit" name="inv_limit" style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                placeholder="' . $row["inv_limit"] . '" value=""></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                        <button class="btn btn-light" type="button" data-bs-dismiss="modal" style="background: var(--bs-gray-700);color: var(--bs-modal-bg);margin-right: 10px;border-style: none;">
                        <i class="fas fa-undo-alt"></i>&nbsp;Reset</button>
                        <button name="Edit_save" class="btn btn-primary" type="submit" style="background: var(--bs-warning);border-style: none;">
                        <i class="far fa-edit"></i>&nbsp;Save</button>
                       
                    </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                <button class="btn btn-light" type="button" onclick="archiveItem(' . $row['inventory_id'] . ', \'' . $row["prod_image"] . '\');" style="background: var(--bs-orange); color: var(--bs-modal-bg); border-style: none;">Archive</button>;
                <script>
                    function archiveItem(inventoryId, pImage) {
                        // Make an AJAX request to php/inventory/inventory_archive.php
                        var xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function () {
                            if (xhr.readyState == XMLHttpRequest.DONE) {
                                if (xhr.status == 200) {
                                    // Request successful, do something if needed
                                    console.log(pImage);
                                    // Optionally, you can reload the page or update the UI
                                    // window.location.reload();
                                    alert("Inventory Archived successfully.");
                                    window.location.href = "\inventory.php";
                                } else {
                                    // Error handling if needed
                                    console.error("Failed to archive item");
                                }
                            }
                        };
                        // Construct the URL with both inventoryId and prodImage parameters
                        var url = "php/inventory/inventory_archive.php?inventory_id=" + inventoryId + "&pImage=" + encodeURIComponent(pImage);
                        xhr.open("GET", url, true);
                        xhr.send();
                    }
                    
                    </script>
                    
                </div>
            </div>
        </div>
    </div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>