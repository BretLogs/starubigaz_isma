<?php
// Retrieve branch information from URL parameters
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "strarubigazV2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve branch information
    $sql = "SELECT branches.branch_id, branches.branch_name, branches.full_address ,users.username
            FROM branches
            INNER JOIN users ON branches.user_id = users.user_id
            WHERE branches.user_id = $user_id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $idbranch = $row["branch_id"];
            $namebranch = $row["branch_name"];
            $addressbranch = $row["full_address"];
            $useradmin = $row["username"];
        }
    } else {
        echo "No branch found for the user.";
    }

    // Close connection
    $conn->close();
} else {
    // Redirect if parameters are not provided
    header("Location: display_branches.php");
    exit();
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 d-xxl-flex align-items-xxl-center">
            <h5 class="text-dark d-inline-block mb-0">Branch /&nbsp;&nbsp;</h5><span
                style="font-size: 20px;font-weight: bold;"><?php echo $namebranch ?></span>
        </div>
        <div class="col-md-6 text-end d-xxl-flex justify-content-xxl-end"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="d-inline-flex d-sm-flex justify-content-between align-items-center justify-content-xxl-start mb-4">
    </div>
</div>
<div class="container">
    <div class="row gy-4">
        <div class="col col-md-9" style="padding-bottom: 22px;">
            <div class="d-xxl-flex align-items-xxl-start">
                <h5 style="display: inline-block;font-weight: bold;">Branch Code :&nbsp;&nbsp;</h5><span
                    style="font-size: 16px;"><?php echo $idbranch ?></span>
            </div>
            <hr style="margin-top: 3px;">
            <div>
                <h5 style="display: inline-block;font-weight: bold;color: rgb(111,111,111);">Admin :&nbsp; &nbsp;</h5>
                <span style="font-size: 20px;font-style: italic;"><?php echo $useradmin ?></span>
            </div>
            <div>
                <h5 style="display: inline-block;font-weight: bold;color: rgb(111,111,111);">Address :&nbsp; &nbsp;</h5>
                <span style="font-size: 20px;font-style: italic;"><?php echo $addressbranch ?></span>
            </div>
        </div>
    </div>