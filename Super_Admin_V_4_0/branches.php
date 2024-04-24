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
                            class="nav-link active" href="branches.php"><i
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
                <div class="container-fluid">
                    <div class="d-inline-flex d-sm-flex justify-content-xxl-center align-items-xxl-center mb-4"></div>
                    <div class="row" style="margin-bottom: 18px;">
                        <div class="col-md-6">
                            <h3 class="text-dark d-xxl-flex justify-content-xxl-start mb-0">Branches</h3>
                        </div>
                        <div class="col-md-6 text-end d-xxl-flex justify-content-xxl-end"><button
                                class="btn btn-outline-primary text-truncate text-end float-none float-sm-none add-another-btn"
                                data-bss-hover-animate="pulse" type="button" style="width: 135px;position: relative;"
                                data-bs-target="#branch-creation-modal" data-bs-toggle="modal">Add Branch<i
                                    class="fas fa-gas-pump edit-icon"></i></button></div>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="row gy-4">
                        <?php include ("php/branch_display.php"); ?>
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
        <div class="modal fade" role="dialog" tabindex="-1" id="branch-creation-modal">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <form id="branchForm" method="post" action="php/branch_create.php">
                        <div class="modal-header">
                            <h4 class="modal-title">Add a new Branch</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-body">
                                <div style="padding-bottom: 0px;margin-bottom: 13px;">
                                    <input type="text" id="username" placeholder="ID" name="username"
                                        style="width: 100%;" disabled="">
                                    <p class="text-end"
                                        style="margin-bottom: -3px;font-size: 10px;color: var(--bs-blue);">
                                        Auto-generated text</p>
                                    <hr>
                                </div>
                                <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Branch Name</p>
                                    <input type="text" id="username-4" placeholder="Tandang Sora Branch"
                                        name="branch_name" style="width: 100%;">
                                </div>
                                <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                                <div style="padding-bottom: 0px;margin-bottom: 14px;">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Full Address (specify as much as
                                        possible)</p>
                                    <textarea style="width: 100%;height: 81px;" name="full_address"></textarea>
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>