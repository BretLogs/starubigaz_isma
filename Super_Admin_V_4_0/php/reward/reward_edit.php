<?php
// Establish database connection (Replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$reward_id = $_POST['reward_id'];
$reward_name = $_POST['reward_name'];
$reward_desc = $_POST['reward_desc'];
$reward_point = $_POST['reward_point'];
$reward_stock = $_POST['reward_stock'];

// Validate old and new images
if (!empty($_FILES['new_reward_image']['name'])) {
    $new_reward_image = $_FILES['new_reward_image'];

    // Check if the new image already exists
    if (file_exists("images/" . $new_reward_image['name'])) {
        echo "Image Already Exist!"; // Send success response
        exit();
    }

    // Get the file extension of the new image
    $new_image_extension = strtolower(pathinfo($new_reward_image['name'], PATHINFO_EXTENSION));

    // Check if the new image has a valid extension
    $allowed_extensions = array("jpg", "jpeg", "png");
    if (!in_array($new_image_extension, $allowed_extensions)) {
        echo "New image file type is not allowed. Please upload a JPG, JPEG, or PNG file.";
        exit();
    }
} else {
    // No new image provided, use the existing one
    $new_reward_image = null;
}

// Handle image file upload
if ($new_reward_image) {
    // Move the new image file to the target directory
    $targetDirectory = "images/";
    $targetFile = $targetDirectory . basename($new_reward_image["name"]);

    if (move_uploaded_file($new_reward_image["tmp_name"], $targetFile)) {
        $display_image = basename($new_reward_image["name"]);

        // Update the database record with the new image file path
        $sql = "UPDATE rewards SET reward_name=?, description=?, point_value=?, reward_image=?, reward_qty=? WHERE reward_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssissi", $reward_name, $reward_desc, $reward_point, $display_image, $reward_stock, $reward_id);

        if ($stmt->execute()) {
            // If the image was successfully updated, unlink the old image file
            if (file_exists("images/" . $_POST['old_reward_image'])) {
                unlink("images/" . $_POST['old_reward_image']);
            }
            echo "success";
        } else {
            echo "Error: " . $sql . "<br>" . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error uploading new image file.";
    }
} else {
    // No new image provided, update the record without changing the image
    $sql = "UPDATE rewards SET reward_name=?, description=?, point_value=?, reward_qty=? WHERE reward_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisi", $reward_name, $reward_desc, $reward_point, $reward_stock, $reward_id);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->error;
    }

    $stmt->close();
}

// Close database connection
$conn->close();
?>
