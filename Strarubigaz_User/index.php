<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
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
                    <li class="nav-item"><a class="nav-link active" href="index.php?user_id=<?php include('parameters.php')?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="buy_list.php?user_id=<?php include('parameters.php')?>">Buy</a></li>
                    <li class="nav-item"><a class="nav-link" href="rewards.php?user_id=<?php include('parameters.php')?>">Rewards</a></li>
                    <li class="nav-item"><a class="nav-link" href="transactions.php?user_id=<?php include('parameters.php')?>">Transactions</a></li>
                    <li class="nav-item"><a class="nav-link" href="settings.php?user_id=<?php include('parameters.php')?>">Settings</a></li>
                </ul>
                </div><a href="cart.php?user_id=<?php include('parameters.php')?>"><i class="fas fa-shopping-bag" style="font-size: 20px;color: var(--bs-yellow);margin-right: 6px;"></i></a><span><?php include('getlistcount.php')?></span>
        </div>
    </nav>
    <header class="bg-primary-gradient">
        <div class="container bg-primary-gradient py-5" style="margin-bottom: -76px;">
            <section class="py-5" style="margin-top: -46px;">
                <div class="row pt-5">
                    <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
                        <div class="text-center">
                            <p class="fw-normal text-primary mb-2">Welcome Back...</p>
                            <h1 class="display-1 fw-bold text-dark"><?php include("getname.php")?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Check you Gaz!</p>
                </div>
            </div>
            <div class="row row-cols-md-2 d-xxl-flex mx-auto justify-content-xxl-center" style="max-width: 900px;">
                <div class="col mb-5">
                    <div class="card shadow-sm">
                        <div class="card-body px-4 py-5 px-md-5">
                            <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-hurricane">
                                    <path d="M6.999 2.6A5.5 5.5 0 0 1 15 7.5a.5.5 0 0 0 1 0 6.5 6.5 0 1 0-13 0 5 5 0 0 0 6.001 4.9A5.5 5.5 0 0 1 1 7.5a.5.5 0 0 0-1 0 6.5 6.5 0 1 0 13 0 5 5 0 0 0-6.001-4.9zM10 7.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"></path>
                                </svg></div>
                            <h2 class="fw-bold card-title"><?php include("getpts.php")?></h2>
                            <p class="text-muted card-text mb-4">Gaz Points</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section></section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
    <script src="assets/js/Button-modal-ecommerce-jquery.touchSwipe.min.js"></script>
    <script src="assets/js/Dynamic-Table-dynamic-table.js"></script>
</body>

</html>