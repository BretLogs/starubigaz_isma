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
                    <li class="nav-item"><a class="nav-link"
                            href="index.php?user_id=<?php include ('parameters.php') ?>"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="inventory.php?user_id=<?php include ('parameters.php') ?>"><i
                                class="fas fa-database"></i><span>Products</span></a><a class="nav-link active"
                            href="branch_information.php?user_id=<?php include ('parameters.php') ?>"><i
                                class="fas fa-info"></i><span>&nbsp;Branch Info</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link"
                            href="rewards.php?user_id=<?php include ('parameters.php') ?>"><i
                                class="fas fa-award"></i><span>Rewards</span></a><a class="nav-link"
                            href="transaction.php?user_id=<?php include ('parameters.php') ?>"><i
                                class="fas fa-cash-register"></i><span>Transactions</span></a></li>
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
                                            class="d-none d-lg-inline me-2 text-gray-600 small"><?php include("getname.php")?></span><img class="border rounded-circle img-profile"
                                            src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                            class="dropdown-item" href="profile.php?user_id=<?php include ('parameters.php') ?>"><i
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
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-xxl-flex align-items-xxl-center">
                            <h5 class="text-dark d-inline-block mb-0">Branch /&nbsp;&nbsp;</h5><span style="font-size: 20px;font-weight: bold;">Tandang Sora Branch</span>
                        </div>
                        <div class="col-md-6 text-end d-xxl-flex justify-content-xxl-end"></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="d-inline-flex d-sm-flex justify-content-between align-items-center justify-content-xxl-start mb-4"></div>
                </div>
                <div class="container">
                    <div class="row gy-4">
                        <div class="col col-md-9" style="padding-bottom: 22px;">
                            <div class="d-xxl-flex align-items-xxl-start">
                                <h5 style="display: inline-block;font-weight: bold;">Branch Code :&nbsp;&nbsp;</h5><span style="font-size: 16px;">1x093123</span>
                            </div>
                            <hr style="margin-top: 3px;">
                            <div>
                                <h5 style="display: inline-block;font-weight: bold;color: rgb(111,111,111);">Admin :&nbsp; &nbsp;</h5><span style="font-size: 20px;font-style: italic;">Karl Adriane Catalan</span>
                            </div>
                            <div>
                                <h5 style="display: inline-block;font-weight: bold;color: rgb(111,111,111);">Address :&nbsp; &nbsp;</h5><span style="font-size: 20px;font-style: italic;">Quezon City, Elliptical, E. Rodriguez 2233</span>
                            </div>
                        </div>
                    </div> -->
                <?php include ("php/branch_information/branch_name_display.php") ?>
                <div class="row gy-4"></div>
                <div class="row gy-4" style="padding-bottom: 20px;margin-top: -6px;">
                    <div class="col">
                        <div class="shadow card"><a class="btn btn-link text-start card-header fw-bold"
                                data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapse-3"
                                href="#collapse-3" role="button" style="font-size: 20px;">Users</a>
                            <div class="collapse show" id="collapse-3">
                                <div class="card-body" style="height: 50vh;overflow-y: scroll;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-md-end dataTables_filter" id="dataTable_filter-4"><label
                                                    class="form-label" style="width: 100%;"><input type="search"
                                                        id="searchInput" class="form-control form-control-sm"
                                                        onkeyup="searchTable()" aria-controls="dataTable"
                                                        placeholder="Search" style="width: 100%;"></label></div>
                                        </div>
                                        <div class="col-md-6 text-end"><button
                                                class="btn btn-outline-primary text-truncate float-none float-sm-none add-another-btn"
                                                data-bss-hover-animate="pulse" type="button"
                                                data-bs-target="#add-user-modal" data-bs-toggle="modal">Add User<i
                                                    class="fas fa-user-plus edit-icon"></i></button></div>
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
                                                <!-- <tr>
                                                        <td style="font-size: 16;">1x90239</td>
                                                        <td style="font-size: 16;">Sev</td>
                                                        <td style="font-size: 16;">sev@email.com</td>
                                                        <td style="font-size: 16;">68.09</td>
                                                        <td style="font-size: 16;"><a class="btn btn-success btn-icon-split" role="button" style="border-style: none;padding-top: 0px;margin-right: 5px;" data-bs-target="#archive-modal" data-bs-toggle="modal"><span class="text-white-50 icon" style="margin-right: 0px;padding: 2px 8px;background: var(--bs-orange);color: var(--bs-orange);"><i class="far fa-file-archive" style="color: var(--bs-btn-color);"></i></span></a></td>
                                                    </tr> -->
                                                <?php include ("php/branch_information/branch_display_cst.php") ?>
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
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Starubikals 2024</span></div>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="archive-modal2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Are you sure you want to archive this user?</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
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
                                    window.location.href = 'http://localhost/Starubigaz_Admin/branch_information.php?user_id=<?php include ('parameters.php') ?>';
                                    
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
                    <h4 class="modal-title">Edit Branch</h4><button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="padding-bottom: 0px;margin-bottom: 13px;"><input type="text" id="username-1" name="username"
                            style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                        <hr>
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Branch Name</p><input type="text"
                            id="username-10"  name="mobile_number"
                            style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Full Address (specify as much as possible)</p>
                        <textarea style="width: 100%;height: 81px;"></textarea>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                        type="button">Save</button></div>
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
                                        User ID</p><input type="text" id="username-2"  name="username"
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
                                        value="<?php echo $idbranch; ?>" name="branch_id"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"
                                        readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Given name</p><input type="text"
                                        id="username"  name="username"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                            </div>
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Last name</p><input type="text"
                                        id="lastname"  name="lastname"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Mobile number</p><input type="text"
                                        id="mobile_number"  name="mobile_number"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Email</p><input id="email"
                                        type="email"  name="email"
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
                    <div class="row">
                        <div class="col">
                            <div style="padding-bottom: 0px;margin-bottom: 13px;">
                                <p class="text-start" style="color: var(--bs-gray);font-size: 12px;margin-bottom: 0px;">
                                    User ID</p><input type="text" id="username-7"  name="username"
                                    style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                                <p class="text-end" style="color: var(--bs-blue);font-size: 12px;">Auto-generated text
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div style="padding-bottom: 0px;margin-bottom: 13px;">
                                <p class="text-start" style="color: var(--bs-gray);font-size: 12px;margin-bottom: 0px;">
                                    Branch</p><input type="text" id="username-8" 
                                    name="username"
                                    style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                                <p class="text-end" style="color: var(--bs-blue);font-size: 12px;">Auto-generated text
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                <p style="margin-bottom: -3px;font-size: 10px;">Given name</p><input type="text"
                                    id="username-9" name="mobile_number"
                                    style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                        </div>
                        <div class="col">
                            <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                <p style="margin-bottom: -3px;font-size: 10px;">Last name</p><input type="text"
                                    id="username-11" name="mobile_number"
                                    style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                <p style="margin-bottom: -3px;font-size: 10px;">Mobile number</p><input type="text"
                                    id="username-12"  name="mobile_number"
                                    style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                <p style="margin-bottom: -3px;font-size: 10px;">email</p><input type="email"
                                    style="width: 100%;color: var(--bs-gray);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                        type="button">Save</button></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>