<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button-1.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Projects-Grid-images.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="width: 100%;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-gas-pump" style="transform: scale(1);"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Starubigaz</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="inventory.html"><i class="fas fa-database"></i><span>Inventory</span></a><a class="nav-link" href="suppliers.html"><i class="fas fa-truck"></i><span>Suppliers</span></a><a class="nav-link" href="branches.html"><i class="fas fa-warehouse"></i><span>Branches</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="branch_owners.html"><i class="fas fa-user-tie"></i><span>Branch Admins</span></a><a class="nav-link" href="rewards.html"><i class="fas fa-award"></i><span>Rewards</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="margin: 0px;padding: 0px;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Sev Constantino</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="../profile.html"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-xxl-flex align-items-xxl-center">
                            <h5 class="text-dark d-inline-block mb-0">Branch /&nbsp;&nbsp;</h5><span style="font-size: 20px;font-weight: bold;">Tandang Sora Branch</span>
                        </div>
                        <div class="col-md-6 d-xxl-flex justify-content-xxl-end"><span class="d-xxl-flex align-items-xxl-end" style="font-size: 20px;font-weight: bold;">Branch Admin :&nbsp;</span><select style="color: var(--bs-blue);border-color: var(--bs-blue);border-radius: 2px;font-size: 16px;padding: 4px;padding-right: 24px;">
                                <option value="">Sev Christian</option>
                                <option value="">Adrian Mones</option>
                                <option value="" selected="">None</option>
                            </select></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="d-inline-flex d-sm-flex justify-content-between align-items-center justify-content-xxl-start mb-4"></div>
                </div>
                <div class="container">
                    <div class="row gy-4">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary m-0 fw-bold">User_name</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-inline-flex">
                                        <p class="d-inline" style="padding-right: 15px;"><strong><span style="color: rgb(28, 200, 138);">Branch ID :&nbsp;</span></strong></p><span style="line-height: 24px;">0x12313</span>
                                    </div>
                                    <div class="d-inline-flex">
                                        <p class="d-inline" style="padding-right: 15px;"><strong><span style="color: rgb(28, 200, 138);">User Infotmation</span></strong></p><span style="line-height: 24px;">UserInformation</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col"><span style="line-height: 24px;">List of users to be trasnfered</span></div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Starubikals 2024</span></div>
                </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <div class="modal fade" role="dialog" tabindex="-1" id="register-user-modal" style="border-style: solid;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Register a User</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div style="padding-bottom: 0px;margin-bottom: 13px;"><input type="text" id="username" placeholder="Membership ID" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                            <p class="text-end" style="margin-bottom: -3px;font-size: 10px;color: var(--bs-blue);">Auto-generated text</p>
                            <hr>
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;">
                            <div class="row">
                                <div class="col">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Given name</p><input type="text" id="username-2" placeholder="Adrian" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                                <div class="col">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Middle name</p><input type="text" id="username-6" placeholder="Raga" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                                <div class="col">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Last name</p><input type="text" id="username-7" placeholder="Contantino" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                                </div>
                            </div>
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                        <div class="row">
                            <div class="col col-md-4">
                                <p style="margin-bottom: -3px;font-size: 10px;">Number</p><input type="text" id="username-1" placeholder="09876543210" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" maxlength="11" required="">
                            </div>
                            <div class="col">
                                <p style="margin-bottom: -3px;font-size: 10px;">email</p><input type="text" id="username-3" placeholder="adrian.mones@email.com" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                        <hr>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;">
                            <div class="row">
                                <div class="col">
                                    <p style="margin-bottom: -3px;font-size: 10px;">Points</p>
                                    <div class="d-inline-flex" style="border: 1px solid rgb(255,255,255);border-right-color: var(--bs-border-color-translucent);"><i class="far fa-star d-inline-block d-xxl-flex align-items-xxl-center" style="margin-right: 8px;padding-top: 0px;color: var(--bs-teal);"></i><input class="d-inline-block" type="text" id="username-5" placeholder="" name="points" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" value="10.0"></div>
                                    <p class="text-end" style="margin-bottom: -3px;font-size: 10px;color: var(--bs-blue);">Starting points</p>
                                </div>
                                <div class="col">
                                    <p style="margin-bottom: -3px;font-size: 10px;">User Level</p><input type="text" id="username-9" placeholder="User" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                                    <p class="text-end" style="margin-bottom: -3px;font-size: 10px;color: var(--bs-blue);">Auto-generated text</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="archive-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Are you sure you want to archive this user?</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button" style="background: var(--bs-red);" data-bs-target="#toast-1" data-bs-toggle="toast">Archive</button></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>