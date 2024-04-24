<?php
// Establish database connection (replace with your own credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $reward_name = $_POST['reward_name'];
    $description = $_POST['reward_desc'];
    $point_value = intval($_POST['reward_point']);
    $reward_img = $_FILES["reward_image"]["name"];
    $reward_qty = intval($_POST['reward_stock']);
    $reward_type = 1;

    // File upload handling
    $targetDirectory = "images/";
    $targetFile = $targetDirectory . basename($_FILES["reward_image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["reward_image"]["tmp_name"]);
    if($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }


    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["reward_image"]["tmp_name"], $targetFile)) {

            // Insert data into database
            $sql = "INSERT INTO rewards (reward_name, description, point_value, reward_image, reward_qty, reward_type) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssisii", $reward_name, $description, $point_value, $reward_img, $reward_qty,$reward_type);

            if ($stmt->execute()) {
                echo '<script>alert("Reward: ' . $reward_name . ' Registered!"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
                exit();
                } else {
                echo "Error: " . $sql . "<br>" . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Close database connection
$conn->close();
?>
