<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="Starubigaz_Admin/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="Starubigaz_Admin/assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="Starubigaz_Admin/assets/css/Add-Another-Button-1.css">
    <link rel="stylesheet" href="Starubigaz_Admin/assets/css/Add-Another-Button.css">
    <link rel="stylesheet" href="Starubigaz_Admin/assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="Starubigaz_Admin/assets/css/Projects-Grid-images.css">
</head>

<body class="bg-gradient-primary" style="background: var(--bs-border-color);color: var(--bs-card-border-color);border-color: var(--bs-white);margin-top: 50px;">
    <div class="container" style="display: grid;">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;Starubigaz_Admin/assets/img/login_img.jpg&quot;);"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Log in</h4>
                            </div>
                            <form action="check_user.php" method="POST">
                                <div class="mb-3"><input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Email" name="email"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password"></div>
                                <div class="mb-3">
                                    <!-- <div class="custom-control custom-checkbox small">
                                        <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                    </div> -->
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit" id="submit" name="submit">Login</button>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>