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
                            echo "<script>alert('Account Updated'); window.location.href='/Starubigaz_Admin/profile.php?user_id=$user_id';</script>";
        
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
                    echo "<script>alert('Account Updated'); window.location.href='/Starubigaz_Admin/profile.php?user_id=$user_id';</script>";

                }  else {
                    echo "Error updating user details: " . $conn->error;
                }
            }
            
            // Check if new password matches confirmation
            
        }
?>
<!-- <form class="form-control" method="post">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body text-center shadow">
                    <div class="mb-3">
                        <p style="margin-bottom: 2px;">User Level</p>
                        <h1 class="fw-bolder" style="color: var(--bs-green);">Super-Admin</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">User Information</p>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="username"><strong>First name</strong></label>
                                    <input class="form-control" type="text" id="first-name" name="first-name" placeholder="<?php echo $firstName; ?>" value="<?php echo $firstName; ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="email"><strong>Last name</strong></label>
                                    <input class="form-control" type="text" id="last-name" name="last-name" placeholder="<?php echo $lastName; ?>" value="<?php echo $lastName; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="first_name"><strong>Contact number</strong></label>
                                    <input class="form-control" type="text" id="mobile-number" name="mobile-number" placeholder="<?php echo $phoneNumber; ?>" value="<?php echo $phoneNumber; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3"></div>
                    </form>
                </div>
            </div>
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Branch Assigned</p>
                </div>
                <div class="card-body">
                    <h3 class="fw-semibold text-center text-warning">Tandang Sorry</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">User Credentials</p>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="username"><strong>Email</strong></label>
                                    <input class="form-control" type="text" id="email" name="email" placeholder="<?php echo $email; ?>"value="<?php echo $email; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="oldpassword"><strong>Old Password</strong></label>
                                    <input class="form-control" type="password" id="oldpassword" name="oldpassword">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="password"><strong>New Password</strong></label>
                                    <input class="form-control" type="password" id="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="c-password"><strong>Confirm Password</strong></label>
                                    <input class="form-control" type="password" id="c-password" name="c-password">
                                </div>
                            </div>
                        </div>
                        <div class="d-xxl-flex justify-content-xxl-end mb-3">
                            <button type="submit" class="btn btn-success btn-icon-split">
                                <span class="text-white-50 icon"><i class="fas fa-check"></i></span>
                                <span class="text-white text">Save Changes</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form> -->
<form class="p-3 p-xl-4" method="post">
<div class="row" style="border: 1px solid var(--bs-gray-400);border-radius: 8px;">
    <div class="col-md-6" style="border-radius: 8px;border: 1px none var(--bs-gray-400);">
        <section class="py-5">
            <div class="container">
                <div class="row mb-1" style="padding-bottom: 2px;margin-bottom: 0px;">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <p class="fw-bold text-success mb-2">Personal Details</p>
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
                        <p class="fw-bold text-success mb-2">Credentials</p>
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
}
$conn->close();
?>
