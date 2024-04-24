<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Services - Brand</title>
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
                    <li class="nav-item"><a class="nav-link active" href="rewards.php?user_id=<?php include('parameters.php')?>">Rewards</a></li>
                    <li class="nav-item"><a class="nav-link" href="transactions.php?user_id=<?php include('parameters.php')?>">Transactions</a></li>
                    <li class="nav-item"><a class="nav-link" href="settings.php?user_id=<?php include('parameters.php')?>">Settings</a></li>
                </ul>
                </div><a href="cart.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-shopping-bag" style="font-size: 20px;color: var(--bs-yellow);margin-right: 6px;"></i></a><span><?php include('getlistcount.php')?></span>
        </div>
    </nav>
    <section class="py-5">
        <div class="container py-5" style="margin-bottom: -46px;">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-warning mb-2" style="color: rgb(255,193,7);">Current Points</p>
                    <h1 class="fw-bold"><?php include("getpts.php")?></h1>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <div class="container" style="padding-bottom: 12px;">
        <div class="row d-xxl-flex justify-content-xxl-center" style="margin: 0px;">
        <script>
    // JavaScript code to handle the click event of the Redeem Item button
    document.addEventListener('DOMContentLoaded', function() {
        const redeemButtons = document.querySelectorAll('.redeem-btn');
        redeemButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Update modal content with reward details
                const modal = document.getElementById('redeem-item');
                const rewardId = this.getAttribute('data-reward-id');
                const rewardName = this.getAttribute('data-reward-name');
                const pointValue = this.getAttribute('data-point-value');
                const rewardQty = this.getAttribute('data-reward-qty');

                // Update modal content
                modal.querySelector('#reward-id').textContent = rewardId;
                modal.querySelector('#reward-name').textContent = rewardName;
                modal.querySelector('#point-value').textContent = pointValue;
                modal.querySelector('#reward-qty').textContent = rewardQty;
            });
        });
    });
</script>
            <?php include("php/reward/reward_display.php")?>
        </div>
    </div>
    <footer class="ms-auto bg-primary-gradient">
        <div class="container py-4 py-lg-5" style="margin-top: 20px;">
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2024 Starubigaz</p>
            </div>
        </div>
    </footer>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
    <script src="assets/js/Button-modal-ecommerce-jquery.touchSwipe.min.js"></script>
    <script src="assets/js/Dynamic-Table-dynamic-table.js"></script>
</body>

</html>