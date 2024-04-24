<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pricing - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
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
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding-bottom: 27px;">
                    <h1>Your Tank</h1>
                    <p class="d-inline">Not Ready to checkout?&nbsp;</p><a href="rewards.html"
                        style="font-style: italic;color: var(--bs-gray-dark);">Continue Shopping</a>
                </div>
            </div>
            <div class="row">
                <div class="col-7 col-md-6">

                    <?php include ("php/cart/cart_list_display.php") ?>
                </div>
                <div class="col-md-6">
                    <div class="sticky-top" style="top: 80px;">
                        <h3 style="padding-top: 10px;margin-bottom: 50px;"><strong>Order Summary</strong></h3>
                        <div class="table-responsive">
                            <table class="table">
                                <?php include ("php/cart/cart_list_total.php") ?>
                                <form id="checkout-form" action="php/cart/cart_receipt.php" method="post">
                                    <button class="btn btn-primary" data-bs-target="#receipt-modal"
                                        data-bs-toggle="modal" type="submit"
                                        style="width: 100%;background: rgb(20,20,20);border-radius: 5px;border-style: none;border-top-style: none;box-shadow: 1px 1px 10px 1px var(--bs-gray);">
                                        Proceed to Checkout
                                    </button>
                                    <input type="hidden" name="user_id"
                                        value="<?php echo isset($_GET['user_id']) ? $_GET['user_id'] : ''; ?>">
                                </form>
                        </div>
                    </div>
                </div>
    </section>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function() {
    $('#checkout-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        var formData = $(this).serialize(); // Serialize form data

        $.ajax({
            url: 'php/cart/cart_receipt.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                // Assuming the response is the modal's HTML
                $('body').append(response); // Append the modal's HTML to the body
                $('#receipt-modal').modal('show'); // Show the modal
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});
function redirectCloseModal() {
    // Redirect to the desired page
    window.location.href = '/Strarubigaz_User/transactions.php?user_id=<?php echo isset($_GET['user_id']) ? $_GET['user_id'] : ''; ?>'; 
}
</script>
</body>

</html>