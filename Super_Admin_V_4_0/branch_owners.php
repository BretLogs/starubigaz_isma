<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
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
    <script src="js/script.js"></script>
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
                    <li class="nav-item"><a class="nav-link" href="index.php"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="inventory.php"><i
                                class="fas fa-database"></i><span>Inventory</span></a><a class="nav-link"
                            href="suppliers.php"><i class="fas fa-truck"></i><span>Suppliers</span></a><a
                            class="nav-link" href="branches.php"><i
                                class="fas fa-warehouse"></i><span>Branches</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link active" href="branch_owners.php"><i
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
                <div class="container-fluid" style="width: 100%;">
                    <div class="card shadow" style="width: 100%;">
                        <div class="card-header py-3">
                            <div
                                style="display: inline-block;width: 100%;border-style: none;border-color: var(--bs-btn-hover-color);">
                                <p class="text-primary m-0 fw-bold" style="display: inline-block;">Admins</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter-1">
                                        <label class="form-label" style="width: 100%;">
                                            <input type="search" class="form-control form-control-sm" id="searchInput"
                                                placeholder="Search" onkeyup="searchTable()" style="width: 100%;">
                                        </label>
                                    </div>
                                </div>
                                <div class="col" style="text-align: right;"><button
                                        class="btn btn-outline-primary text-truncate text-end float-none float-sm-none add-another-btn"
                                        data-bss-hover-animate="pulse" type="button" style="position: relative;"
                                        data-bs-target="#register-modal" data-bs-toggle="modal">Add new Admin<i
                                            class="fas fa-user-astronaut edit-icon"></i></button></div>
                            </div>
                            <div style="height: 60vh;overflow-y: scroll;">
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid"
                                    aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Branch</th>
                                                <th>email</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php include ("php/branch_owners/display_admin.php"); ?>
                                            <!-- <tr>
                                                <td style="font-size: 16;">1x90239</td>
                                                <td style="font-size: 16;">Sev Constantino</td>
                                                <td style="font-size: 16;">09876543210</td>
                                                <td style="font-size: 16px;color: var(--bs-red);">Unassigned</td>
                                                <td style="font-size: 16;">08-10-11</td>
                                                <td style="font-size: 16;"><a class="btn btn-success btn-icon-split"
                                                        role="button"
                                                        style="border-style: none;padding-top: 0px;margin-right: 5px;"
                                                        data-bs-target="#edit-modal" data-bs-toggle="modal"><span
                                                            class="text-white-50 icon"
                                                            style="margin-right: 0px;padding: 2px 8px;background: var(--bs-yellow);"><i
                                                                class="far fa-edit"
                                                                style="color: var(--bs-btn-color);font-size: 14px;transform: translate(2px);"></i></span></a><a
                                                        class="btn btn-success btn-icon-split" role="button"
                                                        style="border-style: none;padding-top: 0px;margin-right: 5px;"
                                                        data-bs-target="#archive-modal" data-bs-toggle="modal"><span
                                                            class="text-white-50 icon"
                                                            style="margin-right: 0px;padding: 2px 8px;background: var(--bs-orange);color: var(--bs-orange);"><i
                                                                class="far fa-file-archive"
                                                                style="color: var(--bs-btn-color);"></i></span></a>
                                                </td>
                                            </tr> -->
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
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Starubikals 2024</span></div>
                </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i
                        class="fas fa-angle-up"></i></a>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="register-modal" style="border-style: solid;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add new Admin</h4><button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="php/branch_owners/register_admin.php" method="post">
                        <div class="row">
                            <div class="col">
                                <!-- Input for branch ID -->
                                <input type="text" id="username" placeholder="ID" name="username"
                                    style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                                <p class="text-end" style="margin-bottom: -3px;font-size: 10px;color: var(--bs-blue);">
                                    Auto-generated text</p>
                                <hr>
                            </div>
                            <div class="col">
                                <!-- Select dropdown for selecting branch -->
                                <?php include ("php/register_admin_cb.php"); ?>
                            </div>
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col">
                                    <!-- Input for given name -->
                                    <p style="margin-bottom: -3px;font-size: 10px;">Given name</p>
                                    <input type="text" id="given_name" placeholder="" name="given_name"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                                <div class="col">
                                    <!-- Input for last name -->
                                    <p style="margin-bottom: -3px;font-size: 10px;">Last name</p>
                                    <input type="text" id="last_name" placeholder="" name="last_name"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <!-- Input for email -->
                                    <p style="margin-bottom: -3px;font-size: 10px;">Email</p>
                                    <input type="email" id="email" name="email"
                                        style="width: 100%;color: var(--bs-gray);">
                                </div>
                                <div class="col">
                                    <!-- Input for mobile number -->
                                    <p style="margin-bottom: -3px;font-size: 10px;">Mobile number</p>
                                    <input type="text" id="mobile_number" placeholder="" name="mobile_number"
                                        style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                            </div>
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                        <div class="modal-footer">
                            <!-- Submit button -->
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="modal fade" role="dialog" tabindex="-1" id="edit-modal" style="border-style: solid;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Admin</h4><button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div style="padding-bottom: 0px;margin-bottom: 13px;"><input type="text" id="username-1"
                                    placeholder="ID" name="username"
                                    style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                                <p class="text-end" style="margin-bottom: -3px;font-size: 10px;color: var(--bs-blue);">
                                    Auto-generated text</p>
                                <hr>
                            </div>
                        </div>
                        <div class="col"><select
                                style="color: var(--bs-gray-dark);border-radius: 2px;font-size: 16px;padding: 4px;padding-right: 24px;border-color: var(--bs-gray);">
                                <option value="0" selected="">Tandang Sora Branch</option>
                                <option value="0">Mapagkalinga Branch</option>
                                <option value="0">E. Rodriguez Branch</option>
                            </select></div>
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col">
                                <p style="margin-bottom: -3px;font-size: 10px;">Given name</p><input type="text"
                                    id="username-4" placeholder="Sev Christian" name="username"
                                    style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                            <div class="col">
                                <p style="margin-bottom: -3px;font-size: 10px;">Last name</p><input type="text"
                                    id="username-5" placeholder="Catalan" name="username"
                                    style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="margin-bottom: -3px;font-size: 10px;">email</p><input type="email"
                                    style="width: 100%;color: var(--bs-gray);">
                            </div>
                            <div class="col">
                                <p style="margin-bottom: -3px;font-size: 10px;">Mobile number</p><input type="text"
                                    id="username-6" placeholder="09876543210" name="username"
                                    style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                        </div>
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                        type="button">Save</button></div>
            </div>
        </div>
    </div> -->
    <div class="modal fade" role="dialog" tabindex="-1" id="archive-modal3">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Are you sure you want to archive this user?</h6><button type="button"
                        class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal">Close</button><button class="btn btn-primary" id="archiveconfirm-admin"
                        type="button" style="background: var(--bs-red);" data-bs-target="#toast-1"
                        data-bs-toggle="toast">Archive</button>
                    <script>
                        // Function to handle the click event of the archive button
                        function handleAdminArchive(admin_userid) {
                            // Show the confirmation modal
                            $('#archive-modal3').modal('show');

                            // Handle the click event of the 'Archive' button inside the modal
                            document.getElementById('archiveconfirm-admin').addEventListener('click', function () {
                                proceedWithQuery(admin_userid);
                            });
                        }

                        // Function to proceed with the database update query
                        function proceedWithQuery(admin_userid) {
                            // Send AJAX request to PHP file to update the database
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', 'php/branch_owners/admin_archived.php', true);
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onreadystatechange = function () {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                    // Handle the response from the server
                                    window.location.href = 'http://localhost/Super_Admin_V_4_0/branch_owners.php';

                                }
                            };
                            xhr.send('adminid=' + admin_userid);

                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>