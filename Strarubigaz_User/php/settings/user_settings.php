<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user details based on user ID from URL
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : null;
if ($user_id) {
    $sql = "SELECT * FROM users WHERE user_id = $user_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row["username"];
        $username_parts = explode(' ', $username);
        $firstName = $username_parts[0];
        $lastName = isset($username_parts[1]) ? $username_parts[1] : '';
        $email = $row["email"];
        $phoneNumber = $row["phone_number"];
        $rpassword = $row["password"];

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Update user details based on input
            $newFirstName = $_POST['first-name'];
            $newLastName = $_POST['last-name'];
            $newEmail = $_POST['email'];
            $newPhoneNumber = $_POST['mobile-number'];
            $oldPassword = $_POST['oldpassword'];
            $newPassword = $_POST['password'];
            $confirmPassword = $_POST['c-password'];

            if(!empty($oldPassword) && !empty($newPassword) && !empty($confirmPassword)){
                if($rpassword == $oldPassword){
                    if ($newPassword == $confirmPassword) {
                        // Construct SQL query to update user details including password
                        $updateSql = "UPDATE users SET username = '$newFirstName $newLastName', email = '$newEmail', phone_number = '$newPhoneNumber', password = '$newPassword' WHERE user_id = $user_id";
                        // Execute the query
                        if ($conn->query($updateSql) === TRUE) {
                            echo "<script>alert('Account Updated'); window.location.href='/Strarubigaz_User/settings.php?user_id=" . $user_id . "';</script>";
        
                        }  else {
                            echo "Error updating user details: " . $conn->error;
                        }
                    } else {
                        echo '<p style="color: red;">New password and confirmation password do not match.</p>';
                    }
                }else{
                    echo '<p style="color: red;">Old password do not match.</p>';
    
    
                }
            }else{
                $updateSql = "UPDATE users SET username = '$newFirstName $newLastName', email = '$newEmail', phone_number = '$newPhoneNumber'WHERE user_id = $user_id";
                // Execute the query
                if ($conn->query($updateSql) === TRUE) {
                    echo "<script>alert('Account Updated'); window.location.href='/Strarubigaz_User/settings.php?user_id=" . $user_id . "';</script>";

                }  else {
                    echo "Error updating user details: " . $conn->error;
                }
            }
            
            // Check if new password matches confirmation
            
        }
?>
<form class="p-3 p-xl-4" method="post">
<div class="row" style="border: 1px solid var(--bs-gray-400);border-radius: 8px;">
    <div class="col-md-6" style="border-radius: 8px;border: 1px none var(--bs-gray-400);">
        <section class="py-5">
            <div class="container">
                <div class="row mb-1" style="padding-bottom: 2px;margin-bottom: 0px;">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <p class="fw-bold text-muted mb-2">Personal Details</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div>
                            
                                <div class="mb-3">
                                    <p style="margin-bottom: 0px;">First Name</p><input class="form-control" type="text" id="name-6" name="first-name" placeholder="<?php echo $firstName; ?>" value="<?php echo $firstName; ?>">
                                </div>
                                <div class="mb-3">
                                    <p style="margin-bottom: 0px;">Last Name</p><input class="form-control" type="text" id="name-2" name="last-name" placeholder="<?php echo $lastName; ?>" value="<?php echo $lastName; ?>">
                                </div>
                                <div class="mb-3">
                                    <p style="margin-bottom: 0px;">Mobile Number</p><input class="form-control" type="text" id="name-5" name="mobile-number" placeholder="<?php echo $phoneNumber; ?>" value="<?php echo $phoneNumber; ?>">
                                </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-6" style="border-radius: 8px;border: 1px none var(--bs-gray-400);">
        <section class="py-5">
            <div class="container">
                <div class="row mb-1" style="padding-bottom: 2px;margin-bottom: 0px;">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <p class="fw-bold text-muted mb-2">Credentials</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div>
                            <form class="p-3 p-xl-4" method="post">
                                <div class="mb-3">
                                    <p style="margin-bottom: 0px;">Email</p><input class="form-control" type="text" id="name-4" name="email" placeholder="<?php echo $email; ?>" value="<?php echo $email; ?>">
                                </div>
                                <div class="mb-3">
                                    <p style="margin-bottom: 0px;">Old Password</p><input class="form-control" id="oldpassword" name="oldpassword" type="password" name="password" value="">
                                </div>
                                <div class="mb-3">
                                    <p style="margin-bottom: 0px;">New Password</p><input class="form-control" id="password" name="password" type="password" name="password" value="">
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <p style="margin-bottom: 0px;">Re-enter Password&nbsp;&nbsp;</p><input class="form-control" id="c-password" name="c-password" type="password" name="re-password">
                                </div>
                                <button class="btn btn-primary text-bg-primary float-end" type="submit" style="margin-top: 0px;">Save Changes</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col"></div>
    <div class="col-md-6"></div>
</div>
</form>
<?php
    } else {
        echo "User not found.";
    }
} else {
    echo "User ID not provided.";
}
$conn->close();
?>
