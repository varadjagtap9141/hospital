<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Medilab : Login</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="admin_assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="admin_assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="admin_assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="admin_assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="admin_assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="admin_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="admin_assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="admin_assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="admin_assets/js/config.js"></script>
</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card px-sm-6 px-0">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="index.php" class="app-brand-link gap-2">
                                <span class="app-brand-text demo text-heading fw-bold">Medilab</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-1">Welcome to Login!</h4>
                        <p class="mb-6">Please sign-in to your account</p>

                        <form id="formAuthentication" class="mb-6" action="auth.php" method="post">
                            <div class="mb-6">
                                <label for="phone_no" class="form-label">Phone No</label>
                                <input type="number" class="form-control" id="phone_no" name="phone_no"
                                    placeholder="Enter your number as username" autofocus />
                            </div>
                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                                <?php
                                session_start();
                                if (isset($_SESSION['error'])) {
                                echo '<p class="error-message" style="color: red;">' 
                                . $_SESSION['error'] . 
                                '</p>';
                                unset($_SESSION['error']); // Remove error message after displaying
                                } elseif (isset($_SESSION['message'])) {
                                echo '<p class="success-message" style="color: green;">' 
                                . $_SESSION['message'] . 
                                '</p>';
                                unset($_SESSION['message']); // Remove success message after displaying
                                }
                                ?>
                            <div class="mb-8">
                                <div class="d-flex justify-content-between mt-8">
                                    <div class="form-check mb-0 ms-2">
                                        <input class="form-check-input" type="checkbox" id="remember-me" />
                                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <a href="master/login.php">
                                    <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="admin_assets/vendor/libs/jquery/jquery.js"></script>
    <script src="admin_assets/vendor/libs/popper/popper.js"></script>
    <script src="admin_assets/vendor/js/bootstrap.js"></script>
    <script src="admin_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin_assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="admin_assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>