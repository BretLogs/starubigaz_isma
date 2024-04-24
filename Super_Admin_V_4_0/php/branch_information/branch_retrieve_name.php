<?php
// Retrieve branch information from URL parameters
if(isset($_GET['branch_name']) && isset($_GET['branch_id'])) {
    $branch_name = $_GET['branch_name'];
    $branch_id = $_GET['branch_id'];
} else {
    // Redirect if parameters are not provided
    header("Location: display_branches.php");
    exit();
}
?>
<div class="col-md-6 d-xxl-flex align-items-xxl-center">
    <h5 class="text-dark d-inline-block mb-0">Branch /&nbsp;&nbsp;</h5>
    <span style="font-size: 20px;font-weight: bold;"><?php echo $branch_name; ?></span>
</div>
