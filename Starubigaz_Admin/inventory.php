<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button-1.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Projects-Grid-images.css">
    <script src="js/search.js"></script>
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
                    <li class="nav-item"><a class="nav-link" href="index.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="inventory.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-database"></i><span>Products</span></a><a class="nav-link active" href="branch_information.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-info"></i><span>&nbsp;Branch Info</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="rewards.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-award"></i><span>Rewards</span></a><a class="nav-link" href="transaction.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-cash-register"></i><span>Transactions</span></a></li>
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
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3" style="display: inline-block;">
                            <p class="text-primary m-0 fw-bold">Products</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9 col-md-6 d-inline-flex justify-content-between align-items-start align-content-center"><label class="col-form-label" style="width: 100%;"><input id="searchInput" class="d-xxl-flex align-items-xxl-center form-control form-control-sm" type="search" aria-controls="dataTable" placeholder="Search" onkeyup="searchTable()"></label></div>
                                <div class="col"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div style="overflow-y: scroll;height: 60vh;">
                                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                            <table class="table my-0" id="dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Barcode</th>
                                                        <th>Product</th>
                                                        <th>Type</th>
                                                        <th>Price</th>
                                                        <th>Supplier</th>
                                                        <th>Expiration</th>
                                                        <th>Stock</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- <tr>
                                                        <td style="font-size: 16;">1x90239</td>
                                                        <td style="font-size: 16;">Diesel Max</td>
                                                        <td style="font-size: 16;">Diesel</td>
                                                        <td style="font-size: 16;">68.09</td>
                                                        <td style="font-size: 16;">0x19230</td>
                                                        <td style="font-size: 16;">08-10-11</td>
                                                        <td style="font-size: 16;">Sev</td>
                                                    </tr> -->
                                                    <?php include("php/inventory/inventory_display.php")?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th><strong>Image</strong></th>
                                                        <td><strong>Barcode</strong></td>
                                                        <td><strong>Product</strong></td>
                                                        <td><strong>Type</strong></td>
                                                        <td><strong>Price</strong></td>
                                                        <td><strong>Supplier</strong></td>
                                                        <td><strong>Expiration</strong></td>
                                                        <td><strong>Stock</strong></td>
                                                    </tr>
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
    <div class="modal fade" role="dialog" tabindex="-1" id="register-modal" style="border-style: solid;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add new Item</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="padding-bottom: 0px;margin-bottom: 13px;"><input type="text" id="username" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                        <p class="text-end" style="margin-bottom: -3px;font-size: 10px;color: var(--bs-blue);">Auto-generated text</p>
                        <hr>
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <div class="row" style="padding-bottom: 12px;">
                            <div class="col col-md-7">
                                <p style="margin-bottom: -3px;font-size: 10px;">Product name</p><input type="text" id="username-2" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                            <div class="col">
                                <p style="margin-bottom: -3px;font-size: 10px;">Type</p><input type="text" id="username-7" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                        </div>
                        <div class="row" style="padding-bottom: 12px;">
                            <div class="col col-md-4">
                                <p style="margin-bottom: -3px;font-size: 10px;">Expiration</p><input type="date" style="color: var(--bs-gray);">
                            </div>
                            <div class="col col-md-8" style="overflow: hidden;">
                                <p style="margin-bottom: -3px;font-size: 10px;">Expiration</p><input type="file" style="color: var(--bs-gray-600);">
                            </div>
                        </div>
                        <hr>
                        <div class="row" style="padding-bottom: 12px;">
                            <div class="col col-md-6">
                                <p style="margin-bottom: -3px;font-size: 10px;">Price</p>
                                <div><span style="margin-right: 3px;">P</span><input type="text" id="username-4"  name="username" style="--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"></div>
                            </div>
                            <div class="col">
                                <p style="margin-bottom: -3px;font-size: 10px;">Stocks</p><input type="text" id="username-5" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                        </div>
                        <div class="row" style="padding-bottom: 12px;">
                            <div class="col col-md-6">
                                <p style="margin-bottom: -3px;font-size: 10px;">Base Price</p>
                                <div><span style="margin-right: 3px;">P</span><input type="text" id="username-10"  name="username" style="--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="padding-bottom: 12px;">
                        <div class="col col-md-8">
                            <p style="margin-bottom: -3px;font-size: 10px;">Name of Supplier</p><select style="color: var(--bs-gray);border-radius: 2px;font-size: 16px;padding: 4px;padding-right: 24px;width: 100%;border-color: var(--bs-gray);">
                                <option value="0" selected="">Tandang Sora Branch</option>
                                <option value="0">Mapagkalinga Branch</option>
                                <option value="0">E. Rodriguez Branch</option>
                            </select>
                            <p style="margin-bottom: -3px;font-size: 10px;color: var(--bs-warning);">Note: Suppliers should be <strong>registered </strong>first...</p>
                        </div>
                        <div class="col d-xxl-flex align-items-xxl-center" style="padding-left: 2px;padding-right: 1px;"><a class="btn btn-light btn-icon-split" role="button" href="suppliers.html"><span class="text-black-50 icon"><i class="fas fa-arrow-right" style="font-size: 14px;"></i></span><span class="text-dark d-xxl-flex align-items-xxl-center text" style="font-size: 10px;">go to suppliers page</span></a></div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="edit-inventory-modal" style="border-style: solid;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Item</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="padding-bottom: 0px;margin-bottom: 13px;"><input type="text" id="username-11" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                        <p class="text-end" style="margin-bottom: -3px;font-size: 10px;color: var(--bs-blue);">Auto-generated text</p>
                        <hr>
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <div class="row" style="padding-bottom: 12px;">
                            <div class="col col-md-7">
                                <p style="margin-bottom: -3px;font-size: 10px;">Product name</p><input type="text" id="username-12" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                            <div class="col">
                                <p style="margin-bottom: -3px;font-size: 10px;">Type</p><input type="text" id="username-13"  name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                        </div>
                        <div class="row" style="padding-bottom: 12px;">
                            <div class="col col-md-4">
                                <p style="margin-bottom: -3px;font-size: 10px;">Expiration</p><input type="date" style="color: var(--bs-gray);">
                            </div>
                            <div class="col col-md-8" style="overflow: hidden;">
                                <p style="margin-bottom: -3px;font-size: 10px;">Expiration</p><input type="file" style="color: var(--bs-gray-600);">
                            </div>
                        </div>
                        <hr>
                        <div class="row" style="padding-bottom: 12px;">
                            <div class="col col-md-6">
                                <p style="margin-bottom: -3px;font-size: 10px;">Price</p>
                                <div><span style="margin-right: 3px;">P</span><input type="text" id="username-14"  name="username" style="--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"></div>
                            </div>
                            <div class="col">
                                <p style="margin-bottom: -3px;font-size: 10px;">Stocks</p><input type="text" id="username-15" name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                            </div>
                        </div>
                        <div class="row" style="padding-bottom: 12px;">
                            <div class="col col-md-6">
                                <p style="margin-bottom: -3px;font-size: 10px;">Base Price</p>
                                <div><span style="margin-right: 3px;">P</span><input type="text" id="username-16" name="username" style="--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="padding-bottom: 12px;">
                        <div class="col col-md-8">
                            <p style="margin-bottom: -3px;font-size: 10px;">Name of Supplier</p><select style="color: var(--bs-gray);border-radius: 2px;font-size: 16px;padding: 4px;padding-right: 24px;width: 100%;border-color: var(--bs-gray);">
                                <option value="0" selected="">Tandang Sora Branch</option>
                                <option value="0">Mapagkalinga Branch</option>
                                <option value="0">E. Rodriguez Branch</option>
                            </select>
                            <p style="margin-bottom: -3px;font-size: 10px;color: var(--bs-warning);">Note: Suppliers should be <strong>registered </strong>first...</p>
                        </div>
                        <div class="col d-xxl-flex align-items-xxl-center" style="padding-left: 2px;padding-right: 1px;"><a class="btn btn-light btn-icon-split" role="button" href="suppliers.html"><span class="text-black-50 icon"><i class="fas fa-arrow-right" style="font-size: 14px;"></i></span><span class="text-dark d-xxl-flex align-items-xxl-center text" style="font-size: 10px;">go to suppliers page</span></a></div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
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