<?php
if (isset($_POST["submit"])) {
    // Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "strarubigazV2";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare data for insertion (you may also want to sanitize inputs)
    $supplier_name = $_POST['supplr_name'];
    $contact_name = $_POST['supplr_person'];
    $email = $_POST['supplr_email'];
    $phone_number = $_POST['supplr_number'];
    $address = $_POST['supplr_address'];
    $Spplr_type = 1; // Assuming Spplr_type is always 1

    // Prepare and bind SQL statement with prepared statement
    $sql = "INSERT INTO suppliers (supplier_name, contact_name, email, phone_number, address, Spplr_type) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $supplier_name, $contact_name, $email, $phone_number, $address, $Spplr_type);

    // Execute the statement
    if ($stmt->execute()) {
        // Supplier registration successful
        echo '<script>alert("Supplier registered successfully!"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
    } else {
        // Error in supplier registration
        echo "Error: " . $stmt->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>
