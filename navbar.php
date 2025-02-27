<!DOCTYPE html>
<html lang="en">
<?php include "admin/master/connection.php";
          $query="SELECT * FROM profile";
          $result=mysqli_query($conn,$query);
          $row=mysqli_fetch_assoc($result);
          ?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?=$row['title']?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="admin/components/upload/<?=$row['favicon']?>" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com"><?=$row['hos_email']?></a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span><?=$row['hos_no']?></span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a target="blank" href="<?=$row['link_1']?>" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a target="blank" href="<?=$row['link_2']?>" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a target="blank" href="<?=$row['link_3']?>" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a target="blank" href="<?=$row['link_4']?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center me-auto">
                    <img src="admin/components/upload/<?=$row['hos_logo']?>" alt="">
                    <h1 class="sitename"><?=$row['hos_name']?></h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a class="ms-auto me-auto" href="#hero" class="active">Home<br></a></li>
                        <li><a class="ms-auto me-auto" href="#about">About</a></li>
                        <li><a class="ms-auto me-auto" href="#services">Services</a></li>
                        <li><a class="ms-auto me-auto" href="#departments">Departments</a></li>
                        <li><a class="ms-auto me-auto" href="#doctors">Doctors</a></li>
                        <li><a class="ms-auto me-auto" href="#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="cta-btn d-none d-sm-block" href="#appointment">Make an Appointment</a>

            </div>

        </div>

    </header>