<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pricing - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Roboto.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
    <link rel="stylesheet" href="assets/css/Button-modal-ecommerce-modal-ecommerce-1.css">
    <link rel="stylesheet" href="assets/css/Button-modal-ecommerce-modal-ecommerce.css">
    <link rel="stylesheet" href="assets/css/Dynamic-Table.css">
    <link rel="stylesheet" href="assets/css/shopping-ecommerce-products.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><i class="fas fa-gas-pump"></i></span><span>Starubigaz</span></a>
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-right: 0px;">
            <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php?user_id=<?php include('parameters.php')?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="buy_list.php?user_id=<?php include('parameters.php')?>">Buy</a></li>
                    <li class="nav-item"><a class="nav-link" href="rewards.php?user_id=<?php include('parameters.php')?>">Rewards</a></li>
                    <li class="nav-item"><a class="nav-link active" href="transactions.php?user_id=<?php include('parameters.php')?>">Transactions</a></li>
                    <li class="nav-item"><a class="nav-link" href="settings.php?user_id=<?php include('parameters.php')?>">Settings</a></li>
                </ul>
                </div><a href="cart.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-shopping-bag" style="font-size: 20px;color: var(--bs-yellow);margin-right: 6px;"></i></a><span><?php include('getlistcount.php')?></span>
        </div>
    </nav>
    <section class="py-5" style="padding-bottom: 0px;height: 80vh;margin-bottom: -48px;">
        <h1 style="text-align: center;">Your Transactions</h1>
        <hr style="margin-right: 24px;margin-left: 24px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><input class="d-xxl-flex align-items-xxl-center form-control form-control-sm" type="search" aria-controls="dataTable" placeholder="Search"></div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="container py-5 container-main" style="overflow-y: scroll;height: 100%;margin-top: 0px;">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Transaction ID</th>
                            <th>Total Amount</th>
                            <th>Points</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include("php/transaction/transaction_display.php")?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
    <script src="assets/js/Button-modal-ecommerce-jquery.touchSwipe.min.js"></script>
    <script src="assets/js/Dynamic-Table-dynamic-table.js"></script>

</body>

</html>