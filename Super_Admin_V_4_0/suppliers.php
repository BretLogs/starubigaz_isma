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
    <script src="js/search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                                class="fas fa-database"></i><span>Inventory</span></a><a class="nav-link active"
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
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3" style="display: inline-block;">
                            <p class="text-primary m-0 fw-bold">Suppliers</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label
                                            class="form-label" style="width: 100%;"><input type="search" id="searchInput"
                                                class="form-control form-control-sm" onkeyup="searchTable()" aria-controls="dataTable"
                                                placeholder="Search" style="width: 100%;"></label></div>
                                </div>
                                <div class="col" style="text-align: right;"><button
                                        class="btn btn-outline-primary text-truncate text-end float-none float-sm-none add-another-btn"
                                        data-bss-hover-animate="pulse" type="button" style="position: relative;"
                                        data-bs-target="#register-modal" data-bs-toggle="modal">Register Supplier<i
                                            class="fas fa-truck-loading edit-icon"></i></button></div>
                            </div>
                            <div style="height: 60vh;overflow-y: scroll;">
                                <div class="table-responsive table mt-2" id="dataTable" role="grid"
                                    aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Contact Person</th>
                                                <th>Email</th>
                                                <th>Mobile #</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            include ("php/supplier/display_supplier.php");
                                            ?>
                                            <!-- <tr>
                                                <td style="font-size: 16;">202400111</td>
                                                <td style="font-size: 16;">Autobots PetronShell</td>
                                                <td style="font-size: 16;">Optimus</td>
                                                <td style="font-size: 16;">Optimus@gmail,com</td>
                                                <td style="font-size: 16;">09123456891</td>
                                                <td style="font-size: 16;">40 San Miguel Avenue. 1550 Mandaluyong City
                                                </td>
                                                <td style="color: var(--bs-success);text-align: center;"><a
                                                        class="btn btn-success btn-icon-split" role="button"
                                                        style="border-style: none;padding-top: 0px;margin: 5px;margin-right: 5px;"
                                                        data-bs-target="#edit-supplier-modal"
                                                        data-bs-toggle="modal"><span class="text-white-50 icon"
                                                            style="margin-right: 0px;padding: 2px 8px;background: var(--bs-yellow);"><i
                                                                class="far fa-edit"
                                                                style="color: var(--bs-btn-color);font-size: 14px;transform: translate(2px);"></i></span></a><a
                                                        class="btn btn-success btn-icon-split" role="button"
                                                        style="border-style: none;padding-top: 0px;margin: 5px;margin-right: 5px;"
                                                        data-bs-target="#archive-modal" data-bs-toggle="modal"><span
                                                            class="text-white-50 icon"
                                                            style="margin-right: 0px;padding: 2px 8px;background: var(--bs-orange);color: var(--bs-orange);width: 32px;"><i
                                                                class="far fa-file-archive"
                                                                style="color: var(--bs-btn-color);"></i></span></a></td>
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
                <form class="" action="php/supplier/supplier_register.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Register Supplier</h4><button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div style="padding-bottom: 0px;margin-bottom: 13px;"><input type="text" id="username"
                                placeholder="ID" name="username"
                                style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                            <p class="text-end" style="margin-bottom: -3px;font-size: 10px;color: var(--bs-blue);">
                                Auto-generated text</p>
                            <hr>
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;">
                            <p style="margin-bottom: -3px;font-size: 10px;">Supplier Name</p><input type="text"
                                id="supplr_name" placeholder="Sev Christian Constantino" name="supplr_name"
                                style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;">
                            <p style="margin-bottom: -3px;font-size: 10px;">Contact Person</p><input type="text"
                                id="supplr_person" placeholder="Karl Adriane Catalan" name="supplr_person"
                                style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;">
                            <p style="margin-bottom: -3px;font-size: 10px;">Email</p><input type="text"
                                id="supplr_email" placeholder="email@email.com" name="supplr_email"
                                style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;">
                            <p style="margin-bottom: -3px;font-size: 10px;">Mobile #</p><input type="text"
                                id="supplr_number" placeholder="09876543210" name="supplr_number"
                                style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;">
                            <p style="margin-bottom: -3px;font-size: 10px;">Address</p><textarea id="supplr_address"
                                name="supplr_address" style="width: 100%;height: 81px;"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" id="submit" name="submit" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function showAlertAndRedirect(message, url) {
    alert(message);
    window.location.href = url;
}

    function handleEditClick(element) {
        var sid = element.getAttribute('data-sid');
        var sname = element.getAttribute('data-sname');
        var scname = element.getAttribute('data-scname');
        var semail = element.getAttribute('data-semail');
        var spnumber = element.getAttribute('data-spnumber');
        var saddress = element.getAttribute('data-saddress');

        // Show the modal
        $('#edit-supplier-modal').modal('show');

        // Populate input fields with supplier data
        document.getElementById('username-7').value = sid;
        document.getElementById('username-8').value = sname;
        document.getElementById('username-9').value = scname;
        document.getElementById('username-10').value = semail;
        document.getElementById('username-11').value = spnumber;
        document.getElementById('username-12').value = saddress;
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Add event listener to the 'Save' button
        document.getElementById('edit-save-btn').addEventListener('click', function () {
            // Retrieve edited values from input fields
            var supplierId = document.getElementById('username-7').value;
            var supplierName = document.getElementById('username-8').value;
            var contactPerson = document.getElementById('username-9').value;
            var email = document.getElementById('username-10').value;
            var mobileNumber = document.getElementById('username-11').value;
            var address = document.getElementById('username-12').value;

            // Construct data object to send via AJAX
            var data = {
                sid: supplierId,
                sname: supplierName,
                scname: contactPerson,
                semail: email,
                spnumber: mobileNumber,
                saddress: address
            };

            // Send data to server using AJAX
          // Send data to server using AJAX
var xhr = new XMLHttpRequest();
xhr.open('POST', 'php/supplier/supplier_edit.php', true);
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            // Handle response from server
            var response = xhr.responseText;
            if (response === "success") {
                showAlertAndRedirect("Supplier Edit Successful", window.location.href);
            } else {
                alert("Error: " + response);
            }
        } else {
            alert('Error: ' + xhr.status);
        }
    }
};
xhr.send(JSON.stringify(data));

        });
    });
</script>


    <div class="modal fade" role="dialog" tabindex="-1" id="edit-supplier-modal" style="border-style: solid;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Supplier</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="padding-bottom: 0px;margin-bottom: 13px;">
                        <input type="text" id="username-7" placeholder="ID" name="username"
                            style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                        <p class="text-end" style="margin-bottom: -3px;font-size: 10px;color: var(--bs-blue);">
                            Auto-generated text</p>
                        <hr>
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Supplier name</p>
                        <input type="text" id="username-8" placeholder="" name="username"
                            style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Contact Person</p>
                        <input type="text" id="username-9" placeholder="" name="username"
                            style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Email</p>
                        <input type="text" id="username-10" placeholder="" name="username"
                            style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Mobile #</p>
                        <input type="text" id="username-11" placeholder="" name="mobile_number"
                            style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Address</p>
                        <textarea id="username-12" style="width: 100%;height: 81px;"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                    <button id="edit-save-btn" class="btn btn-primary" type="button">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="archive-modal2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Are you sure you want to archive this Supplier?</h6>
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
                        function handleArchiveClick($id_supplr) {
                            // Show the confirmation modal
                            $('#archive-modal2').modal('show');

                            // Handle the click event of the 'Archive' button inside the modal
                            document.getElementById('archive-confirm-btn 3').addEventListener('click', function () {
                                proceedWithQuery($id_supplr);
                            });
                        }

                        // Function to proceed with the database update query
                        function proceedWithQuery($id_supplr) {
                            // Send AJAX request to PHP file to update the database
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', 'php/supplier/supplier_archive.php', true);
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onreadystatechange = function () {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                    // Handle the response from the server
                                    window.location.href = 'http://localhost/Super_Admin_V_4_0/suppliers.php';
                                    
                                }
                            };
                            xhr.send('supplr_id=' + $id_supplr);

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