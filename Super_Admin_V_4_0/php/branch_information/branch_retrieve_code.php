<?php
// Retrieve branch information from URL parameters
if (isset($_GET['branch_id']) && isset($_GET['full_address'])) {
    $branch_id = $_GET['branch_id'];
    $branch_address = $_GET['full_address'];

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

    // Retrieve admin for the branch
    $sql = "SELECT users.username AS admin_name
            FROM users
            INNER JOIN branches ON users.user_id = branches.user_id
            WHERE branches.branch_id = $branch_id AND users.role = 'Admin'";
    $result = $conn->query($sql);

    // Check if query executed successfully
    if ($result) {
        if ($result->num_rows > 0) {
            // Fetch the admin name
            $row = $result->fetch_assoc();
            $admin_name = $row['admin_name'];
        } else {
            $admin_name = "No admin assigned";
        }
    } else {
        $admin_name = "Error fetching admin";
    }

    // Close connection
    $conn->close();
} else {
    // Redirect if parameters are not provided
    header("Location: display_branches.php");
    exit();
}
?>

<div class="d-xxl-flex align-items-xxl-start">
    <h5 style="display: inline-block;font-weight: bold;">Branch Code:&nbsp;&nbsp;</h5><span style="font-size: 16px;">
        <?php echo $branch_id; ?>
    </span>
</div>
<div>
    <hr style="margin-top: 3px;">
    <h5 style="display: inline-block;font-weight: bold;color: rgb(111,111,111);">Address :&nbsp; &nbsp;</h5><span
        style="font-size: 20px;font-style: italic;">
        <?php echo $branch_address; ?>
    </span>
</div>
<div>
    <h5 style="display: inline-block;font-weight: bold;color: rgb(111,111,111);">Admin :&nbsp; &nbsp;</h5><span
        style="font-size: 20px;font-style: italic;<?php echo ($admin_name == 'No admin assigned') ? 'color: red;' : ''; ?>">
        <?php echo $admin_name; ?>
    </span>
</div>
