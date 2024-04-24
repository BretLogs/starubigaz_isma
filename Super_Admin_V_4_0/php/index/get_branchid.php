<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve branches
$sql = "SELECT * FROM branches WHERE branch_type = 1";
$result = $conn->query($sql);

// Display select box
echo '<select id="branchSelect" class="d-xxl-flex justify-content-xxl-end" style="
                    color: var(--bs-blue);
                    border-color: var(--bs-blue);
                    border-radius: 2px;
                    font-size: 16px;
                    padding: 4px;
                    padding-right: 24px;
                  ">';
// Add an option for selecting all branches
echo '<option value="">All Branches</option>';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["branch_id"] . '">' . $row["branch_name"] . '</option>';
    }
} else {
    echo '<option value="" selected>All Branches</option>'; // Set default option to "All Branches"
}

echo '</select>';

// Get selected branch_id
$conn->close();
?>

<script>
    // JavaScript to update URL with selected branch ID
    document.getElementById('branchSelect').addEventListener('change', function () {
        var branchId = this.value; // Get the selected branch ID
        var urlParams = new URLSearchParams(window.location.search); // Get URL parameters
        if (branchId) {
            urlParams.set('branch_id', branchId); // Set branch_id parameter in URL
        } else {
            urlParams.delete('branch_id'); // Remove branch_id parameter from URL
        }
        var newUrl = window.location.pathname + '?' + urlParams.toString(); // Construct new URL
        history.pushState(null, '', newUrl); // Update URL without reloading the page
    });

    // Set default branch_id to empty if no option is selected
    document.addEventListener('DOMContentLoaded', function () {
        var branchSelect = document.getElementById('branchSelect');
        if (!branchSelect.value) {
            branchSelect.value = '';
        }
    });
</script>
