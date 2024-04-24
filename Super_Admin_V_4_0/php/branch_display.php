<?php
// Database connection
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

// Fetch all branches from the database
$sql = "SELECT * FROM branches WHERE branch_type = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Display each branch using the provided HTML structure
        echo '<div class="col-md-3"><a href="branch_information.php?branch_id=' . $row["branch_id"] . '&branch_name=' . urlencode($row["branch_name"]) . '&full_address=' . urlencode($row["full_address"]) . '">
                <div class="card shadow border-start-primary py-2" data-bss-hover-animate="pulse">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col-auto"><i class="fas fa-gas-pump fa-2x text-gray-300"></i>
                            </div>
                            <div class="col me-2" style="text-align: right;">
                                <div class="text-dark fw-bold h5 mb-0"><span>' . $row["branch_name"] . '</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>';
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
