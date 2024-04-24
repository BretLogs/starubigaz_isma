<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button-1.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Projects-Grid-images.css">
    <script src="js/search.js"></script>
    <!-- Include necessary scripts, stylesheets, etc. -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
            style="width: 100%;">
            <div class="container-fluid d-flex flex-column p-0"><a
                    class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-gas-pump"
                            style="transform: scale(1);"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Starubigaz</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="inventory.php"><i
                                class="fas fa-database"></i><span>Inventory</span></a><a class="nav-link"
                            href="suppliers.php"><i class="fas fa-truck"></i><span>Suppliers</span></a><a
                            class="nav-link" href="branches.php"><i
                                class="fas fa-warehouse"></i><span>Branches</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="branch_owners.php"><i
                                class="fas fa-user-tie"></i><span>Branch Admins</span></a><a class="nav-link"
                            href="rewards.php"><i class="fas fa-award"></i><span>Rewards</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top"
                    style="margin: 0px;padding: 0px;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                    aria-expanded="false" data-bs-toggle="dropdown" href="#"><i
                                        class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small"
                                                type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0"
                                                    type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                            class="d-none d-lg-inline me-2 text-gray-600 small">Super Admin</span><img class="border rounded-circle img-profile"
                                            src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                            class="dropdown-item" href="profile.php"><i
                                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="/login.php"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <?php include ("php/branch_information/branch_retrieve_name.php"); ?>
                        <div class="col-md-6 text-end d-xxl-flex justify-content-xxl-end">
                            <div class="d-inline-block">
                                <a class="btn btn-warning btn-icon-split" role="button" style="margin-right: 20px;"
                                    data-bs-target="#edit-branch-modal" data-bs-toggle="modal"><span
                                        class="text-white-50 icon">
                                        <i class="far fa-edit"></i></span><span class="text-white text">Edit
                                        Branch</span>
                                </a>
                                <a class="btn btn-danger btn-icon-split archive-branch-btn" role="button"
                                    data-bs-target="#archive-modal" data-bs-toggle="modal">
                                    <span class="text-white-50 icon"><i class="fas fa-file-archive"></i></span>
                                    <span class="text-white text">Archive Branch</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div
                        class="d-inline-flex d-sm-flex justify-content-between align-items-center justify-content-xxl-start mb-4">
                    </div>
                </div>
                <div class="container">
                    <div class="row gy-4">
                        <div class="col col-md-9" style="padding-bottom: 22px;">
                            <?php include ("php/branch_information/branch_retrieve_code.php");
                            ?>
                        </div>
                    </div>
                    <!-- <div class="row gy-4">
                        <div class="col">
                            <div class="shadow card" style="margin-bottom: 20px;"><a
                                    class="btn btn-link text-start card-header fw-bold" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapse-4" href="#collapse-4" role="button"
                                    style="font-size: 20px;">Products</a>
                                <div class="collapse" id="collapse-4">
                                    <div
                                        style="height: 60vh;overflow: visible;overflow-y: scroll;padding: 10px;overflow-x: hidden;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="text-md-end dataTables_filter" id="dataTable_filter-3"
                                                    style="overflow: visible;"><label class="form-label"
                                                        style="width: 100%;"><input type="search"
                                                            class="form-control form-control-sm"
                                                            aria-controls="dataTable" placeholder="Search"
                                                            style="width: 100%;"></label></div>
                                            </div>
                                            <div class="col d-xl-flex justify-content-xl-end"></div>
                                        </div>
                                        <div class="table-responsive table mt-2" id="dataTable-3" role="grid"
                                            aria-describedby="dataTable_info">
                                            <table class="table my-0" id="dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Barcode</th>
                                                        <th>Product</th>
                                                        <th>Type</th>
                                                        <th>Price</th>
                                                        <th>Expiration</th>
                                                        <th>Stock</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size: 16;">inv_id</td>
                                                        <td style="font-size: 16;">prod_id</td>
                                                        <td style="font-size: 16;">prod_type</td>
                                                        <td style="font-size: 16;">price</td>
                                                        <td style="font-size: 16;">Expiration</td>
                                                        <td style="font-size: 16;color: var(--bs-teal);">Stock</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr></tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row gy-4" style="padding-bottom: 20px;">
                        <div class="col">
                            <div class="shadow card">
                                <a class="btn btn-link text-start card-header fw-bold" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button"
                                    style="font-size: 20px;">Users
                                </a>
                                <div class="collapse" id="collapse-3">
                                    <div class="card-body" style="height: 60vh;overflow-y: scroll;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="text-md-end dataTables_filter" id="dataTable_filter-4">
                                                    <label class="form-label" style="width: 100%;"><input type="search"
                                                            id="searchInput" class="form-control form-control-sm"
                                                            onkeyup="searchTable()" aria-controls="dataTable"
                                                            placeholder="Search" style="width: 100%;"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-end"><button
                                                    class="btn btn-outline-primary text-truncate float-none float-sm-none add-another-btn"
                                                    data-bss-hover-animate="pulse" type="button"
                                                    data-bs-target="#add-user-modal" data-bs-toggle="modal">Add User<i
                                                        class="fas fa-user-plus edit-icon"></i></button>
                                            </div>
                                        </div>
                                        <div class="table-responsive table mt-2" id="dataTable-4" role="grid"
                                            aria-describedby="dataTable_info">
                                            <table class="table my-0" id="dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>email</th>
                                                        <th>Mobile</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include ("php/branch_information/branch_display_cst.php");
                                                    ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr></tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4" style="padding-bottom: 20px;">
                        <div class="col">
                            <div class="shadow card"><a class="btn btn-link text-start card-header fw-bold"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse-1"
                                    href="#collapse-1" role="button" style="font-size: 20px;">Transactions</a>
                                <div class="collapse" id="collapse-1">
                                    <div class="col" style="padding: 20px;">
                                        <h3></h3>
                                        <div class="row">
                                            <div class="col col-md-5"><input
                                                    class="d-xxl-flex align-items-xxl-center form-control form-control-sm"
                                                    type="search" aria-controls="dataTable" placeholder="Search"
                                                    style="margin-top: 12px;margin-bottom: 8px;"></div>
                                            <div class="col"></div>
                                        </div>
                                        <div style="height: 60vh;overflow-y: scroll;">
                                            <hr>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Transaction ID</th>
                                                            <th>Date</th>
                                                            <th>Customer Name</th>
                                                            <th>Points Earned</th>
                                                            <th>Total Amount</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    include ("php/branch_information/branch_transaction_display.php");
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Starubikals 2024</span></div>
                </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i
                        class="fas fa-angle-up"></i></a>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="archive-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Are you sure you want to archive this branch?</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                    <button id="archive-confirm-btn" class="btn btn-primary" type="button"
                        style="background: var(--bs-red);" data-bs-target="#toast-1" data-bs-toggle="toast"
                        data-id="<?php echo $branch_id; ?>">Archive</button>
                </div>
                <script>document.addEventListener('DOMContentLoaded', function () {
                        // Archive button 1
                        const archiveButton1 = document.getElementById('archive-confirm-btn');

                        archiveButton1.addEventListener('click', function () {
                            const branchId = this.dataset.id;

                            // Send branchId to the PHP script via AJAX
                            const xhr = new XMLHttpRequest();
                            xhr.open('POST', 'php/branch_information/branch_archived.php', true);
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onreadystatechange = function () {
                                if (xhr.readyState == XMLHttpRequest.DONE) {
                                    if (xhr.status === 200) {

                                        alert("Branch Archived successfully.");
                                        window.location.href = 'http://localhost/Super_Admin_V_4_0/branches.php';
                                        console.log("success");
                                    }
                                }
                            };
                            xhr.send(`branch_id=${branchId}`);
                        });


                    });</script>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="archive-modal2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Are you sure you want to archive this user?</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button id="cancel" class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                    <button id="archive-confirm-btn 3" class="btn btn-primary" type="button"
                        style="background: var(--bs-red);">
                        Archive
                    </button>
                    <script>
                        // Function to handle the click event of the archive button
                        function handleArchiveButtonClick(userId) {
                            // Show the confirmation modal
                            $('#archive-modal2').modal('show');

                            // Handle the click event of the 'Archive' button inside the modal
                            document.getElementById('archive-confirm-btn 3').addEventListener('click', function () {
                                proceedWithQuery(userId);
                            });
                        }

                        // Function to proceed with the database update query
                        function proceedWithQuery(userId) {
                            // Send AJAX request to PHP file to update the database
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', 'php/branch_information/branch_archived_cst.php', true);
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onreadystatechange = function () {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                    // Handle the response from the server
                                    alert(xhr.responseText);
                                    // Optionally, update the UI based on the response
                                }
                            };
                            xhr.send('userid=' + userId);

                        }
                       
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="edit-branch-modal" style="border-style: solid;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Branch</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form for editing branch information -->
                    <form action="php/branch_information/branch_edit.php" method="post">
                        <input type="hidden" name="branch_id" value="<?php echo $branch_id; ?>">
                        <div class="form-group">
                            <label for="branch_name">Branch Name</label>
                            <input type="text" class="form-control" id="branch_name" name="branch_name"
                                value="<?php echo $branch_name; ?>" required>
                            <input type="text" class="form-control" id="branch_id_test" name="branch_id_test"
                                value="<?php echo $branch_id; ?>" required style="display:none">
                        </div>
                        <div class="form-group">
                            <label for="full_address">Full Address</label>
                            <textarea class="form-control" id="full_address" name="full_address" rows="3"
                                required><?php echo $branch_address; ?></textarea>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="add-user-modal" style="border-style: solid;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4><button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="php/branch_information/branch_Add_cst.php" method="post">
                        <div class="row">
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 13px;">
                                    <p class="text-start"
                                        style="color: var(--bs-gray);font-size: 12px;margin-bottom: 0px;">
                                        User ID</p><input type="text" id="username-2" placeholder="ID" name="username"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"
                                        disabled="">
                                    <p class="text-end" style="color: var(--bs-blue);font-size: 12px;">Auto-generated
                                        text
                                    </p>
                                </div>
                            </div>
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 13px;">
                                    <p class="text-start"
                                        style="color: var(--bs-gray);font-size: 12px;margin-bottom: 0px;">
                                        Branch</p>
                                    <input type="text" id="branch_id" placeholder="<?php echo $branch_id; ?>"
                                        value="<?php echo $branch_id; ?>" name="branch_id"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Given name</p><input type="text"
                                        id="username" placeholder="" name="username"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                            </div>
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Last name</p><input type="text"
                                        id="lastname" placeholder="" name="lastname"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Mobile number</p><input type="text"
                                        id="mobile_number" placeholder="" name="mobile_number"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Email</p><input id="email"
                                        type="email" placeholder="" name="email"
                                        style="width: 100%;color: var(--bs-gray);">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="edit-user-modal" style="border-style: solid;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4><button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="php/branch_information/branch_edit_cst.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 13px;">
                                    <p class="text-start"
                                        style="color: var(--bs-gray);font-size: 12px;margin-bottom: 0px;">
                                        User ID</p><input type="text" id="username-7" placeholder="ID" name="username"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"
                                        disabled="">
                                    <p class="text-end" style="color: var(--bs-blue);font-size: 12px;">Auto-generated
                                        text
                                    </p>
                                </div>
                            </div>
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 13px;">
                                    <p class="text-start"
                                        style="color: var(--bs-gray);font-size: 12px;margin-bottom: 0px;">
                                        Branch</p><input type="text" id="username-8" placeholder="Tandang Sora"
                                        name="username"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"
                                        disabled="">
                                    <p class="text-end" style="color: var(--bs-blue);font-size: 12px;">Auto-generated
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Username</p><input type="text"
                                        id="username" placeholder="Sev" name="username"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Mobile number</p><input type="text"
                                        id="mobile_number" placeholder="09876543210" name="mobile_number"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Email</p><input type="email"
                                        id="email" placeholder="example@example.com" name="email"
                                        style="width: 100%;color: var(--bs-gray);">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>

                </div>
                </form>
            </div>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/js/bs-init.js"></script>
            <script src="assets/js/theme.js"></script>
</body>

</html>