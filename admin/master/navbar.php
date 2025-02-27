<!doctype html>
<?php include "connection.php"; 
session_start();
?>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="../admin_assets/" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <?php

$query="SELECT * FROM profile";
$result=mysqli_query($conn,$query);
$profile_row=mysqli_fetch_assoc($result);
?>
    <title><?=$profile_row['title']?> Admin</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../components/upload/<?=$profile_row['favicon']?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="../admin_assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../admin_assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../admin_assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../admin_assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../admin_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../admin_assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../admin_assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../admin_assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="dashboard.php" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img width="auto" height="40" src="../components/upload/<?=$profile_row['favicon']?>"
                                alt="">
                        </span>
                        <?php
extract($_POST);
$query="SELECT * FROM admin Where admin_id='$_SESSION[admin_id]'";
$result=mysqli_query($conn,$query);
$admin=mysqli_fetch_assoc($result);
?>
                        <span class="app-brand-text demo menu-text fw-bold ms-2"><?=$admin['role']?></span>
                    </a>

                    <a href="#" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a href="dashboard.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-smile"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
                            <span class="badge rounded-pill bg-danger ms-auto">5</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="profile.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                            <div class="text-truncate" data-i18n="Front Pages">Profile</div>
                        </a>
                    </li>
                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-home"></i>
                            <div class="text-truncate" data-i18n="Layouts">Home</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item active">
                                <a href="details.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Analytics">Update Details</div>
                                </a>
                            </li>
                            <li class="menu-item active">
                                <a href="highlight.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Analytics">Add Highlights</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-info-circle"></i>
                            <div class="text-truncate" data-i18n="Front Pages">About Us</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item active">
                                <a href="about.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Analytics">Manage About Us</div>
                                </a>
                            </li>
                            <li class="menu-item active">
                                <a href="counter.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Analytics">Manage Counter</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="service.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-health"></i>
                            <div class="text-truncate" data-i18n="Front Pages">Services</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="department.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-heart-circle"></i>
                            <div class="text-truncate" data-i18n="Front Pages">Departments</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="doctor.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-user-plus"></i>
                            <div class="text-truncate" data-i18n="Front Pages">Doctors</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="faq.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-question-mark"></i>
                            <div class="text-truncate" data-i18n="Front Pages">FAQ's</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="testimonial.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-quote-left"></i>
                            <div class="text-truncate" data-i18n="Front Pages">Testimonials</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="gallery.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-images"></i>
                            <div class="text-truncate" data-i18n="Front Pages">Gallery</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="contact.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-phone"></i>
                            <div class="text-truncate" data-i18n="Front Pages">Contact Us</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="appointment.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-book-alt"></i>
                            <div class="text-truncate" data-i18n="Front Pages">Appointment</div>
                        </a>
                    </li>
                    <!-- Apps & Pages -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Support</span>
                    </li>
                    <li class="menu-item">
                        <a href="support.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div class="text-truncate" data-i18n="Email">Support Team</div>
                        </a>
                    </li>

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="bx bx-menu bx-md"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow p-0" href="#" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../admin_assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../admin_assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0"><?=$admin['name']?></h6>
                                                    <small class="text-muted"><?=$admin['role']?></small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" onClick="return confirm('Are You Sure?')"
                                            href="logout.php">
                                            <i class="bx bx-power-off bx-md me-3"></i><span>Log Out</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">