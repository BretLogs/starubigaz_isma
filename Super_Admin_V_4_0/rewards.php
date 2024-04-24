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
    <script src=js/search.js></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                                class="fas fa-user-tie"></i><span>Branch Admins</span></a><a class="nav-link active"
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
                    <div
                        class="d-inline-flex d-sm-flex justify-content-between align-items-center justify-content-xxl-start mb-4">
                    </div>
                </div>
                <div class="container">
                    <div class="row gy-4" style="margin-bottom: 20px;padding-top: 0px;margin-top: -24px;">
                        <div class="col">
                            <div class="shadow card"><a class="btn btn-link text-start card-header fw-bold"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse-1"
                                    href="#collapse-1" role="button" style="font-size: 20px;">Available Rewards</a>
                                <div class="collapse" id="collapse-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="text-md-end dataTables_filter" id="dataTable_filter-2">
                                                    <label class="form-label" style="width: 100%;"><input type="search"
                                                            class="form-control form-control-sm" id="searchInput" onkeyup="searchTable()"
                                                            aria-controls="dataTable" placeholder="Search"
                                                            style="width: 100%;"></label>
                                                </div>
                                            </div>
                                            <div class="col d-xxl-flex justify-content-xxl-end"><button
                                                    class="btn btn-outline-primary text-truncate text-end float-none float-sm-none add-another-btn"
                                                    data-bss-hover-animate="pulse" type="button"
                                                    style="position: relative;" data-bs-target="#add-award-modal"
                                                    data-bs-toggle="modal">Add Reward Item<i
                                                        class="fas fa-hat-wizard edit-icon"></i></button></div>
                                        </div>
                                        <div style="height: 40vh;overflow-y: scroll;">
                                            <div class="table-responsive table mt-2" id="dataTable-2" role="grid"
                                                aria-describedby="dataTable_info">
                                                <table class="table my-0" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>image</th>
                                                            <th>Reward ID</th>
                                                            <th>Name</th>
                                                            <th>Description</th>
                                                            <th>Point Value</th>
                                                            <th>Quantity</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- <tr>
                                                            <td><img src="assets/img/dogs/image2.jpeg"
                                                                    style="height: 50px;border-radius: 5px;"></td>
                                                            <td style="font-size: 16;">0x12</td>
                                                            <td style="font-size: 16;">Bag</td>
                                                            <td style="font-size: 16;">Kung ang ilaw ay nagbibigay
                                                                liwanag. bakit ang upuan ay toyota?</td>
                                                            <td style="font-size: 16;">68.09</td>
                                                            <td style="font-size: 16;">12</td>
                                                            <td style="font-size: 16;"><a
                                                                    class="btn btn-success btn-icon-split" role="button"
                                                                    style="border-style: none;padding-top: 0px;margin-right: 5px;"
                                                                    data-bs-target="#edit-award-modal"
                                                                    data-bs-toggle="modal"><span
                                                                        class="text-white-50 icon"
                                                                        style="margin-right: 0px;padding: 2px 8px;background: var(--bs-yellow);"><i
                                                                            class="far fa-edit"
                                                                            style="color: var(--bs-btn-color);font-size: 14px;transform: translate(2px);"></i></span></a><a
                                                                    class="btn btn-success btn-icon-split" role="button"
                                                                    style="border-style: none;padding-top: 0px;margin-right: 5px;"
                                                                    data-bs-target="#archive-modal"
                                                                    data-bs-toggle="modal"><span
                                                                        class="text-white-50 icon"
                                                                        style="margin-right: 0px;padding: 2px 8px;background: var(--bs-orange);color: var(--bs-orange);"><i
                                                                            class="far fa-file-archive"
                                                                            style="color: var(--bs-btn-color);"></i></span></a>
                                                            </td>
                                                        </tr> -->

                                                        <?php include ("php/reward/reward_display.php") ?>
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
                    <div class="row gy-4" style="margin-bottom: 20px;padding-top: 0px;margin-top: -24px;">
                        <div class="col">
                            <div class="shadow card"><a class="btn btn-link text-start card-header fw-bold"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse-4"
                                    href="#collapse-4" role="button" style="font-size: 20px;">Reward Transactions</a>
                                <div class="collapse" id="collapse-4">
                                    <div class="row"
                                        style="padding: 0px;padding-right: 20px;padding-left: 20px;padding-top: 20px;">
                                        <div class="col-md-6">
                                            <div class="text-md-end dataTables_filter" id="dataTable_filter-3"><label
                                                    class="form-label" style="width: 100%;"><input type="search"
                                                        class="form-control form-control-sm" aria-controls="dataTable"
                                                        placeholder="Search" style="width: 100%;"></label></div>
                                        </div>
                                        <div class="col d-xxl-flex justify-content-xxl-end"></div>
                                    </div>
                                    <div class="card-body">
                                        <div style="height: 40vh;overflow-y: scroll;">
                                            <div class="table-responsive table mt-2" id="dataTable-3" role="grid"
                                                aria-describedby="dataTable_info">
                                                <table class="table my-0" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Date/Time</th>
                                                            <th>Transaction ID</th>
                                                            <th>Customer name</th>
                                                            <th>Branch</th>
                                                            <th>Rewards</th>
                                                            <th>Rewards price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php include ("php/reward/branch_Redeem_display.php") ?>
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
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Starubikals 2024</span></div>
                </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i
                        class="fas fa-angle-up"></i></a>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="archive-modal2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Are you sure you want to archive this user?</h6><button type="button"
                        class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button"
                        id="archive-confirm-btn 3" style="background: var(--bs-red);" data-bs-target="#toast-1"
                        data-bs-toggle="toast">Archive</button></div>
                <script>
                    // Function to handle the click event of the archive button
                    function handleArchiveButtonClick(rewardId, rImage) {
                        // Show the confirmation modal
                        $('#archive-modal2').modal('show');

                        // Handle the click event of the 'Archive' button inside the modal
                        document.getElementById('archive-confirm-btn 3').addEventListener('click', function () {
                            proceedWithQuery(rewardId, rImage);
                        });
                    }

                    // Function to proceed with the database update query
                    function proceedWithQuery(rewardId, rImage) {
                        // Send AJAX request to PHP file to update the database
                        var xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function () {
                            if (xhr.readyState == XMLHttpRequest.DONE) {
                                if (xhr.status == 200) {
                                    // Request successful, do something if needed
                                    console.log(rImage);
                                    // Optionally, you can reload the page or update the UI
                                    // window.location.reload();
                                    alert("Reward Archived successfully.");
                                    window.location.href = "\\reward.php";
                                } else {
                                    // Error handling if needed
                                    console.error("Failed to archive item");
                                }
                            }
                        };
                        // Construct the URL with both inventoryId and prodImage parameters
                        var url = "php/reward/reward_archive.php?rewardid=" + rewardId + "&rImage=" + encodeURIComponent(rImage);
                        xhr.open("GET", url, true);
                        xhr.send();

                    }
                </script>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="add-award-modal" style="border-style: solid;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Reward</h4><button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="php/reward/reward_add.php" method="post" enctype="multipart/form-data">
                        <div class="d-xl-flex justify-content-xxl-center align-items-xxl-center"
                            style="height: 200px;background: rgba(197,197,197,0.19);border-radius: 10px;margin: 12px;margin-right: 0px;margin-left: 0px;margin-top: 0px;margin-bottom: 0px;">
                            <img class="border rounded border-1" style="height: 100%;">
                        </div>
                        <input type="file" id="reward_image" name="reward_image" accept=".jpg, .jpeg, .png"
                            style="padding-bottom: 10px;margin-bottom: 4px;width: 100%;padding-top: 4px;">
                        <div style="padding-bottom: 0px;margin-bottom: 13px;"><input type="text" id="reward_id"
                                placeholder="Reward ID" name="username"
                                style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;" disabled="">
                            <p class="text-end"
                                style="margin: 0px;padding: 0px;border-color: var(--bs-modal-border-color);color: var(--bs-blue);font-size: 10px;">
                                This is an auto-generated text</p>
                            <hr>
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;">
                            <p style="margin-bottom: -3px;font-size: 10px;">Reward Name</p><input type="text"
                                id="reward_name" placeholder="" name="reward_name"
                                style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;">
                            <p style="margin-bottom: -3px;font-size: 10px;">Point Value</p>
                            <div><span style="margin-right: 3px;">P</span><input type="text" id="reward_point"
                                    placeholder="" name="reward_point"
                                    style="--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"></div>
                            <p style="margin-bottom: -3px;font-size: 10px;">Stocks</p>
                            <div><input type="text" id="reward_stock" placeholder="" name="reward_stock"
                                    style="--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"></div>
                        </div>
                        <div style="padding-bottom: 0px;margin-bottom: 14px;">
                            <p style="margin-bottom: -3px;font-size: 10px;">Description(specify...)</p><textarea
                                id="reward_desc" name="reward_desc" style="width: 100%;height: 81px;"></textarea>
                        </div>
                        <div><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button
                                class="btn btn-primary" type="submit">Save</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="edit-award-modal" style="border-style: solid;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Reward</h4><button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-xl-flex justify-content-xxl-center align-items-xxl-center"
                        style="height: 200px;background: rgba(197,197,197,0.19);border-radius: 10px;margin: 12px;margin-right: 0px;margin-left: 0px;margin-top: 0px;margin-bottom: 0px;">
                        <img class="border rounded border-1" style="height: 100%;" id="old_reward_image">
                    </div>
                    <input type="file" id="new_reward_image" name="new_reward_image" accept=".jpg, .jpeg, .png"
                        style="padding-bottom: 10px;margin-bottom: 4px;width: 100%;padding-top: 4px;">
                    <div style="padding-bottom: 0px;margin-bottom: 13px;"><input type="text" id="id" placeholder=""
                            name="username" style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"
                            disabled="">
                        <p class="text-end"
                            style="margin: 0px;padding: 0px;border-color: var(--bs-modal-border-color);color: var(--bs-blue);font-size: 10px;">
                            This is an auto-generated text</p>
                        <hr>
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;"></div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Reward Name</p><input type="text" id="name"
                            placeholder="" name="name"
                            style="width: 100%;--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;">
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Point Value</p>
                        <div><span style="margin-right: 3px;">P</span><input type="text" id="point" placeholder=""
                                name="point" style="--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"></div>
                        <p style="margin-bottom: -3px;font-size: 10px;">Stocks</p>
                        <div><input type="text" id="stock" placeholder="" name="stock"
                                style="--bs-primary: #4e73df;--bs-primary-rgb: 78,115,223;"></div>
                    </div>
                    <div style="padding-bottom: 0px;margin-bottom: 14px;">
                        <p style="margin-bottom: -3px;font-size: 10px;">Description(specify...)</p><textarea id="desc"
                            name="desc" style="width: 100%;height: 81px;"></textarea>
                    </div>
                    <div><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button
                            id="edit-save-btn" class="btn btn-primary" type="submit">Save</button></div>
                </div>
            </div>
            <script>
                function showAlertAndRedirect(message, url) {
                    alert(message);
                    window.location.href = url;
                }

                function EditClick(element) {
                    var rimage = element.getAttribute('data-rimage')
                    var rid = element.getAttribute('data-rid');
                    var rname = element.getAttribute('data-rname');
                    var rdesc = element.getAttribute('data-rdesc');
                    var rpoint = element.getAttribute('data-rpoint');
                    var rqty = element.getAttribute('data-rqty');

                    // Show the modal
                    $('#edit-award-modal').modal('show');

                    // Populate input fields with supplier data
                    document.getElementById('old_reward_image').src = "/Super_Admin_V_4_0/php/reward/images/" + rimage;
                    document.getElementById('id').value = rid;
                    document.getElementById('name').value = rname;
                    document.getElementById('desc').value = rdesc;
                    document.getElementById('point').value = rpoint;
                    document.getElementById('stock').value = rqty;
                }
                document.addEventListener('DOMContentLoaded', function () {
                    // Add event listener to the 'Save' button
                    document.getElementById('edit-save-btn').addEventListener('click', function () {
                        // Retrieve edited values from input fields
                        var rewardId = document.getElementById('id').value;
                        var rewardName = document.getElementById('name').value;
                        var rewardDesc = document.getElementById('desc').value;
                        var rewardPoint = document.getElementById('point').value;
                        var rewardStock = document.getElementById('stock').value;
                        var rewardImage = document.getElementById('new_reward_image', 'name').files[0]; // Get the selected image file
                        var rimage = decodeURIComponent(document.getElementById('old_reward_image').src.split('/').pop());

                        // Construct form data object to send via AJAX
                        var formData = new FormData();
                        formData.append('reward_id', rewardId);
                        formData.append('reward_name', rewardName);
                        formData.append('reward_desc', rewardDesc);
                        formData.append('reward_point', rewardPoint);
                        formData.append('reward_stock', rewardStock);
                        formData.append('new_reward_image', rewardImage);
                        formData.append('old_reward_image', rimage); // Append the image file

                        // Send data to server using AJAX
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', 'php/reward/reward_edit.php', true);
                        xhr.onreadystatechange = function () {
                            if (xhr.readyState === 4) {
                                if (xhr.status === 200) {
                                    // Handle response from server
                                    var response = xhr.responseText;
                                    if (response === "success") {
                                        showAlertAndRedirect("Reward Edit Successful", window.location.href);
                                    } else if (response === "Image Already Exist!") {
                                        showAlertAndRedirect("Image Already Exist!", window.location.href);
                                    }
                                    else if (response === "New image file type is not allowed. Please upload a JPG, JPEG, or PNG file.") {
                                        showAlertAndRedirect("New image file type is not allowed. Please upload a JPG, JPEG, or PNG file.", window.location.href);
                                    } else {
                                        alert("Error: " + response);
                                    }
                                } else {
                                    alert('Error: ' + xhr.status);
                                }
                            }
                        };
                        xhr.send(formData); // Send form data
                    });
                });


            </script>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>