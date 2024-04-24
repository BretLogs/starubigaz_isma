<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projects - Brand</title>
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
                    <li class="nav-item"><a class="nav-link active" href="buy_list.php?user_id=<?php include('parameters.php')?>">Buy</a></li>
                    <li class="nav-item"><a class="nav-link" href="rewards.php?user_id=<?php include('parameters.php')?>">Rewards</a></li>
                    <li class="nav-item"><a class="nav-link" href="transactions.php?user_id=<?php include('parameters.php')?>">Transactions</a></li>
                    <li class="nav-item"><a class="nav-link" href="settings.php?user_id=<?php include('parameters.php')?>">Settings</a></li>
                </ul>
                </div><a href="cart.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-shopping-bag" style="font-size: 20px;color: var(--bs-yellow);margin-right: 6px;"></i></a><span><?php include('getlistcount.php')?></span>
        </div>
    </nav>
    <section class="py-5">
        <div class="container py-5">
            <div><a href="rewards.html"><i class="fas fa-arrow-left" style="font-size: 24px;"></i></a></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center"><img src="assets/img/products/2.jpg" style="width: 300px;border-radius: 10px;"></div>
                <div class="col-md-6">
                    <div></div>
                    <div class="row">
                        <div class="col">
                            <h1 style="margin-bottom: 0px;">Wallet ni Mones</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p style="display: inline;">In Stock:&nbsp;<span style="font-weight: bold;">32</span></p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 12px;padding-bottom: 12px;">
                        <div class="col d-xxl-flex align-items-xxl-center"><button class="btn btn-primary" type="button" style="border-radius: 2px;background: var(--bs-gray-dark);border-style: none;"><i class="fas fa-shopping-bag"></i>&nbsp; Add to Cart</button></div>
                        <div class="col" style="text-align: center;"></div>
                    </div>
                    <p class="d-xxl-flex align-items-xxl-center">Items :&nbsp;<input class="form-control-sm" type="text" style="border-radius: 4px;border-width: 1px;border-color: var(--bs-gray-dark);font-size: 10px;text-align: center;width: 43.8px;" value="1"></p>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
    <script src="assets/js/Button-modal-ecommerce-jquery.touchSwipe.min.js"></script>
    <script src="assets/js/Dynamic-Table-dynamic-table.js"></script>
</body>

</html>