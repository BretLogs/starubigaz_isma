<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$iduser = isset($_GET['user_id']) ? $_GET['user_id'] : null;

// Fetch user's reward points
$sql_user_points = "SELECT user_reward_pts FROM users WHERE user_id = $iduser";
$result_user_points = $conn->query($sql_user_points);
if ($result_user_points->num_rows > 0) {
    $row = $result_user_points->fetch_assoc();
    $user_reward_pts = $row['user_reward_pts'];
} else {
    // Handle error
    $user_reward_pts = 0;
}

// Prepare and execute query to fetch rewards
$sql = "SELECT * FROM rewards WHERE reward_type = 1 AND reward_qty != 0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $reward_id = $row['reward_id'];
        $reward_name = htmlspecialchars($row['reward_name']);
        $reward_image = htmlspecialchars($row['reward_image']);
        $point_value = $row['point_value'];
        $reward_qty = $row['reward_qty'];

        echo '<div class="col-md-3" style="padding: 12px;padding-bottom: 24px;padding-top: 12px;margin: 12px;padding-right: 24px;background: #ffffff;">
                <div class="d-xl-flex justify-content-xxl-center align-items-xxl-center" style="height: 200px;background: rgba(197,197,197,0.19);border-radius: 10px;">
                    <img class="border rounded border-1" style="height: 100%;" src="/Super_Admin_V_4_0/php/reward/images/' . $reward_image . '">
                </div>
                <div>
                    <h6 style="font-weight: bold;color: var(--bs-gray-700);padding-top: 10px;">' . $reward_name . '</h6>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-inline">
                        <p class="d-inline" style="margin-bottom: 0px;"><i class="fab fa-first-order"></i>&nbsp;' . number_format($point_value, 2) . '</p>
                    </div>
                    <div class="d-inline"><span style="font-size: 9px;color: rgb(193,193,193);">Items available :&nbsp;</span><span>' . $reward_qty . '</span></div>
                </div>
                <div class="row">
                    <div class="col col-md5">
                        <button class="btn btn-primary redeem-btn" type="button"
                            data-reward-id="' . $reward_id . '"
                            data-reward-name="' . $reward_name . '"
                            data-point-value="' . $point_value . '"
                            data-reward-qty="' . $reward_qty . '"
                            style="padding-right: 10px;padding-left: 10px;background: var(--bs-warning);color: rgb(255,255,255);border-style: none;border-radius: 10px;width: 100%;margin-top: 10px;font-size: 12px;--bs-body-font-weight: normal;"
                            data-bs-toggle="modal" data-bs-target="#redeem-item">Redeem Item</button>
                    </div>
                </div>
            </div>';
            
    }
    echo '<div class="modal fade" role="dialog" tabindex="-1" id="redeem-item">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Redeem item</h4><button type="button" class="btn-close" aria-label="Close" onclick="redirectCloseModals()"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p>Reward ID:&nbsp;<span id="reward-id"></span></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p>Point Value:&nbsp;<span id="point-value"></span></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p>Reward Quantity:&nbsp;<span id="reward-qty"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="overflow-y: visible;"></div>
                        <div class="container">
                            <h3 style="text-align: center;font-weight: bold;margin-bottom: 0px;"><span id="reward-name"></span></h3>
                            <h5 class="text-black-50" style="text-align: center;font-weight: bold;">Total :&nbsp;<i class="fas fa-life-ring"></i>&nbsp;<span>12.98</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        
} else {
    echo "No rewards found.";
}
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('click', '.redeem-btn', function() {
    var reward_id = $(this).data('reward-id');
    var point_value = $(this).data('point-value');
    var iduser = <?php echo $iduser; ?>;

    $.ajax({
        type: 'POST',
        url: 'php/reward/deduct_points.php',
        data: {
            user_id: iduser,
            redeem_point_value: point_value,
            reward_id: reward_id
        },
        success: function(response) {
        },
        error: function(xhr, status, error) {
            alert("An error occurred: " + error); // Show error message
        }
    });
});
function redirectCloseModals() {
    // Redirect to the desired page
    window.location.href = '/Strarubigaz_User/rewards.php?user_id=<?php echo isset($_GET['user_id']) ? $_GET['user_id'] : ''; ?>'; 
}
</script>
