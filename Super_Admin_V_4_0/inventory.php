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
                    <li class="nav-item"><a class="nav-link active" href="inventory.php"><i
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
                <div class="container-fluid" style="padding-top: 0px;">
                    <div class="row">
                        <!-- <div class="col-md-3" style="padding-bottom: 24px;">
                            <div
                                style="border-radius: 4px;padding: 4px;background: var(--bs-white);border: 1px none rgb(217,217,217);box-shadow: 0px 0px 12px var(--bs-gray-400);padding-left: 0px;padding-right: 0px;padding-bottom: 0px;overflow: hidden;">
                                <div class="d-xl-flex justify-content-xxl-center align-items-xxl-center"
                                    style="height: 200px;border-radius: 12px;margin-top: 12px;"><img
                                        class="border rounded border-1" style="height: 100%;"
                                        src="image"></div>
                                <div style="padding-left: 8px;">
                                    <h5
                                        style="font-weight: bold;color: var(--bs-gray-700);padding-top: 10px;margin-bottom: 0px;">
                                        prodcut_name</h5>
                                    <p style="margin-bottom: 0px;font-weight: bold;">stock:&nbsp;<span
                                            style="color: var(--bs-danger);">24</span></p>
                                </div>
                                <div class="row">
                                    <div class="col col-md5"><a class="btn btn-primary" role="button"
                                            style="padding-right: 10px;padding-left: 10px;background: var(--bs-btn-hover-bg);color: rgb(255,255,255);border-style: none;border-radius: 12px;width: 100%;margin-top: 10px;font-size: 16px;--bs-body-font-weight: normal;margin-bottom: 0px;border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;border-top-left-radius: 4px;border-top-right-radius: 4px;box-shadow: 0px 0px 8px var(--bs-gray);padding-bottom: 10px;opacity: 0.80;"
                                            href="rewards_information.html" data-bs-target="#display-items"
                                            data-bs-toggle="modal">Check Item</a></div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-3" style="padding-bottom: 24px;padding-top: 0px;min-height: 300px;">
                            <div style="width: 100%;height: 100%;"><button class="btn btn-primary" type="button"
                                    style="width: 100%;height: 100%;background: rgb(255,255,255);border-style: none;box-shadow: 0px 0px 2px var(--bs-gray);padding-top: 0px;padding-right: 0px;padding-left: 0px;margin-right: 0px;padding-bottom: 24px;"
                                    data-bs-target="#add-items" data-bs-toggle="modal"><i class="fas fa-plus"
                                        style="font-size: 68px;color: var(--bs-gray);"></i></button></div>
                        </div>
                        <?php
                        include ("php/inventory/inventory_display.php");
                        ?>


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

    <div class="modal fade" role="dialog" tabindex="-1" id="add-items">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="php/inventory/inventory_add.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Item</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-xl-flex justify-content-xxl-center align-items-xxl-center"
                            style="height: 200px;background: rgba(197,197,197,0.19);border-radius: 10px;margin: 12px;margin-right: 0px;margin-left: 0px;margin-top: 0px;margin-bottom: 0px;">
                            <img class="border rounded border-1" style="height: 100%;">
                        </div>
                        <input type="file" id="prod_image" name="prod_image" accept=".jpg, .jpeg, .png"
                            style="padding-bottom: 10px;margin-bottom: 4px;width: 100%;padding-top: 4px;">
                        <div>
                            <h6 style="color: var(--bs-gray-dark);font-weight: bold;margin-bottom: 0px;">Manage</h6>
                            <hr style="margin-top: -1px;padding-top: 0px;padding-bottom: 0px;">
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Barcode</td>
                                            <td>
                                                <input type="text"
                                                    style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                    placeholder="0x153" disabled="">
                                                <p class="text-end"
                                                    style="color: var(--bs-danger);font-size: 8px;margin-bottom: 0px;">
                                                    Edit unavailable</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Product</td>
                                            <td><input id="product_name" name="product_name" type="text"
                                                    style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td><input id="product_type" name="product_type" type="text"
                                                    style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td><input id="price" name="price" type="text"
                                                    style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>Base Price</td>
                                            <td><input id="price_base" name="price_base" type="text"
                                                    style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Name of Supplier</td>
                                            <td>
                                                <select id="supplier_id" name="supplier_id"
                                                    style="color: var(--bs-gray);border-radius: 2px;font-size: 12px;padding: 4px;padding-right: 24px;width: 100%;border-color: var(--bs-gray);">
                                                    <?php include ("php/inventory/supplier_cb.php"); ?>
                                                </select>
                                                <p
                                                    style="margin-bottom: -3px;font-size: 10px;color: var(--bs-warning);">
                                                    Note: Suppliers should be <strong>registered</strong> first...</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Expiration</td>
                                            <td>
                                                <input type="date" id="expiration" name="expiration"
                                                    style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                    value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Stock</td>
                                            <td><input id="inv_stock" name="inv_stock" type="text"
                                                    style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Stock Limit</td>
                                            <td><input id="inv_limit" name="inv_limit" type="text"
                                                    style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                    value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-xxl-flex justify-content-between justify-content-xxl-end">
                        <button class="btn btn-primary" type="submit"
                            style="background: var(--bs-btn-disabled-border-color);border-style: none;"><i
                                class="fas fa-plus"></i>&nbsp;Add Item</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- <div class="modal fade" role="dialog" tabindex="-1" id="display-items">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Item</h4><button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-xl-flex justify-content-xxl-center align-items-xxl-center"
                        style="height: 200px;background: rgba(197,197,197,0.19);border-radius: 10px;margin: 12px;margin-right: 0px;margin-left: 0px;margin-top: 0px;margin-bottom: 0px;">
                        <img class="border rounded border-1" style="height: 100%;" src="assets/img/products/2.jpg">
                    </div><input type="file"
                        style="padding-bottom: 10px;margin-bottom: 4px;width: 100%;padding-top: 4px;">
                    <div>
                        <h6 style="color: var(--bs-gray-dark);font-weight: bold;margin-bottom: 0px;">Manage</h6>
                        <hr style="margin-top: -1px;padding-top: 0px;padding-bottom: 0px;">
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Barcode</td>
                                        <td><input type="text"
                                                style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                value="0x153" disabled="">
                                            <p class="text-end"
                                                style="color: var(--bs-danger);font-size: 8px;margin-bottom: 0px;">Edit
                                                unavailable</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Product</td>
                                        <td><input type="text"
                                                style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                value="Diesel Max"></td>
                                    </tr>
                                    <tr>
                                        <td>Type</td>
                                        <td><input type="text"
                                                style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                value="Diesel"></td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td><input type="text"
                                                style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                value="68.09"></td>
                                    </tr>
                                    <tr>
                                        <td>Supplier</td>
                                        <td><input type="text"
                                                style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                value="Sev Constantino"></td>
                                    </tr>
                                    <tr>
                                        <td>Expiration</td>
                                        <td><input type="text"
                                                style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                value="08/10/2024"></td>
                                    </tr>
                                    <tr>
                                        <td>In Stock</td>
                                        <td><input type="text"
                                                style="padding-top: 4px;padding-right: 8px;padding-bottom: 4px;padding-left: 8px;font-size: 12px;width: 100%;color: var(--bs-gray-900);border-radius: 4px;border: 1px solid var(--bs-table-active-color);"
                                                value="24"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between"><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal"
                        style="background: var(--bs-orange);color: var(--bs-modal-bg);border-style: none;"><i
                            class="far fa-file-archive"></i>&nbsp;Archive</button>
                    <div><button class="btn btn-light" type="button" data-bs-dismiss="modal"
                            style="background: var(--bs-gray-700);color: var(--bs-modal-bg);margin-right: 10px;border-style: none;"><i
                                class="fas fa-undo-alt"></i>&nbsp;Reset</button><button class="btn btn-primary"
                            type="button" style="background: var(--bs-warning);border-style: none;"><i
                                class="far fa-edit"></i>&nbsp;Save</button></div>
                </div>
            </div>
        </div>
    </div> -->
        <div class="modal fade" role="dialog" tabindex="-1" id="archive-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Are you sure you want to archive this user?</h6><button type="button"
                            class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button"
                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button"
                            style="background: var(--bs-red);" data-bs-target="#toast-1"
                            data-bs-toggle="toast">Archive</button></div>
                </div>
            </div>
        </div>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-init.js"></script>
        <script src="assets/js/theme.js"></script>
</body>

</html>