<?php include "navbar.php"; ?>
<?php include "admin/master/connection.php"?>
<?php
$query="SELECT * FROM profile";
$result=mysqli_query($conn,$query);
$profile_row=mysqli_fetch_assoc($result);
?>

<?php
$query="SELECT * FROM landing";
$result=mysqli_query($conn,$query);
$landing_row=mysqli_fetch_assoc($result);
?>
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container position-relative">
            <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                <h2>WELCOME TO <?=$profile_row['hos_name']?></h2>
                <p>We are team of talented designers making websites with <?=$landing_row['subtitle']?></p>
            </div><!-- End Welcome -->

            <div class="content row gy-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                        <h3>Why Choose <?=$profile_row['hos_name']?>?</h3>
                        <p>
                            Lorem ipsum dolor sit amet, <?=$landing_row['why_subtitle']?>
                        </p>
                        <div class="text-center">
                            <a href="#about" class="more-btn"><span><?=$landing_row['btn_title']?></span> <i
                                    class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Why Box -->

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="row gy-4">
                            <?php
              $query="SELECT * FROM home_highlight LIMIT 3";
              $result=mysqli_query($conn,$query);
              foreach($result as $heighlight_row)
              {
                ?>
                            <div class="col-md-4">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                    <i class="<?=$heighlight_row['highlight_icon']?>"></i>
                                    <h4><?=$heighlight_row['highlight_title']?></h4>
                                    <p>Excepteur sint occaecat cupidatat non proident,
                                        <?=$heighlight_row['highlight_subtitle']?>
                                    </p>
                                </div>
                            </div>
                            <?php
              }
              ?>
                        </div>
                    </div>
                </div>
            </div><!-- End  Content-->

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <?php
        $query="SELECT * FROM about_us";
        $result=mysqli_query($conn,$query);
        $about_row=mysqli_fetch_assoc($result);
        ?>
        <div class="container">

            <div class="row gy-4 gx-5">

                <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                    <img src="admin/components/upload/<?=$about_row['about_img']?>" class="w-100 h-100" alt="">
                    <a href="<?=$about_row['link']?>" class="glightbox pulsating-play-btn"></a>
                </div>

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <h3>About <?=$about_row['about_title']?></h3>
                    <p>
                        <?=$about_row['about_desc']?>
                    </p>
                    <ul>
                        <li>
                            <i class="<?=$about_row['icon_1']?>"></i>
                            <div>
                                <h5>Ullamco laboris <?=$about_row['title_1']?></h5>
                                <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                            </div>
                        </li>
                        <li>
                            <i class="<?=$about_row['icon_2']?>"></i>
                            <div>
                                <h5>Magnam soluta odio <?=$about_row['title_2']?></h5>
                                <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata
                                    redi</p>
                            </div>
                        </li>
                        <li>
                            <i class="<?=$about_row['icon_3']?>"></i>
                            <div>
                                <h5>Voluptatem et qui <?=$about_row['title_3']?></h5>
                                <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime
                                    veniam</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <?php
            $query="SELECT * FROM about_counter";
            $result=mysqli_query($conn,$query);
            $counter_row=mysqli_fetch_assoc($result);
            ?>
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fa-solid fa-user-doctor"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="<?=$counter_row['counter_1']?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Doctors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fa-regular fa-hospital"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="<?=$counter_row['counter_2']?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Departments</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fa-solid fa-flask"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="<?=$counter_row['counter_3']?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Research Labs</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fa-solid fa-award"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="<?=$counter_row['counter_4']?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Awards</p>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                <?php
              $query="SELECT * FROM services";
              $result=mysqli_query($conn,$query);
              foreach($result as $service_row)
              {
                ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="<?=$service_row['icon']?>"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3><?=$service_row['content_title']?></h3>
                        </a>
                        <p><?=$service_row['content_desc']?></p>
                    </div>
                </div>
                <?php
              }
              ?>



            </div>

        </div>

    </section><!-- /Services Section -->
    <?php
$department=$conn->query("SELECT department_id, department_name FROM hospital_department");
$doctor=$conn->query("SELECT doctor_id, doctor_name FROM doctors");
?>
    <!-- Appointment Section -->
    <section id="appointment" class="appointment section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Appointment</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <form action="admin/components/save_appointment.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group mt-3">
                        <select class="form-select" id="department_id" name="department_id" aria-label="department_id">
                            <option value="" selected>Select Department</option>
                            <?php
                                while ($row = $department->fetch_assoc()) {
                                    echo "<option value='" . $row['department_id'] . "'>" . htmlspecialchars($row['department_name']) . "</option>";
                                }
                                ?>
                        </select>
                    </div>
                    <div class="col-md-6 form-group mt-3">
                        <select class="form-select" id="doctor_id" name="doctor_id" aria-label="doctor_id">
                            <option value="" selected>Select Doctor</option>
                            <?php
                                while ($row = $doctor->fetch_assoc()) {
                                    echo "<option value='" . $row['doctor_id'] . "'>" . htmlspecialchars($row['doctor_name']) . "</option>";
                                }
                                ?>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                </div>
                <div class="mt-3">
                    <div class="text-center"><button type="submit">Make an Appointment</button></div>
                </div>
            </form>

        </div>

    </section><!-- /Appointment Section -->

    <!-- Departments Section -->
    <section id="departments" class="departments section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Departments</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <?php
            $query="SELECT * FROM department";
            $result=mysqli_query($conn,$query);
            $dept_row=mysqli_fetch_assoc($result);
            ?>
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab"
                                href="#departments-tab-1"><?=$dept_row['dept_name_1']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab"
                                href="#departments-tab-2"><?=$dept_row['dept_name_2']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab"
                                href="#departments-tab-3"><?=$dept_row['dept_name_3']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab"
                                href="#departments-tab-4"><?=$dept_row['dept_name_4']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab"
                                href="#departments-tab-5"><?=$dept_row['dept_name_5']?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="departments-tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3><?=$dept_row['dept_name_1']?></h3>
                                    <p class="fst-italic"><?=$dept_row['subtitle_1']?></p>
                                    <p><?=$dept_row['desc_1']?></p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="admin/components/upload/<?=$dept_row['img_1']?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3><?=$dept_row['dept_name_2']?></h3>
                                    <p class="fst-italic"><?=$dept_row['subtitle_2']?></p>
                                    <p><?=$dept_row['desc_2']?></p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="admin/components/upload/<?=$dept_row['img_2']?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3><?=$dept_row['dept_name_3']?></h3>
                                    <p class="fst-italic"><?=$dept_row['subtitle_3']?></p>
                                    <p><?=$dept_row['desc_3']?></p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="admin/components/upload/<?=$dept_row['img_3']?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3><?=$dept_row['dept_name_4']?></h3>
                                    <p class="fst-italic"><?=$dept_row['subtitle_4']?></p>
                                    <p><?=$dept_row['desc_4']?></p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="admin/components/upload/<?=$dept_row['img_4']?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-5">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3><?=$dept_row['dept_name_5']?></h3>
                                    <p class="fst-italic"><?=$dept_row['subtitle_5']?>
                                    </p>
                                    <p><?=$dept_row['desc_5']?></p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="admin/components/upload/<?=$dept_row['img_5']?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Departments Section -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Doctors</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                <?php
                $query="SELECT * FROM doctors";
                $doctor_row=mysqli_query($conn,$query);
                foreach($doctor_row as $data)
                {
                    ?>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="admin/components/upload/<?=$data['doctor_img']?>" class="img-fluid"
                                alt=""></div>
                        <div class="member-info">
                            <h4><?=$data['doctor_name']?></h4>
                            <span><?=$data['position']?></span>
                            <p><?=$data['dr_desc']?></p>
                            <div class="social">
                                <a href="<?=$data['link_1']?>"><i class="bi bi-twitter-x"></i></a>
                                <a href="<?=$data['link_2']?>"><i class="bi bi-facebook"></i></a>
                                <a href="<?=$data['link_3']?>"><i class="bi bi-instagram"></i></a>
                                <a href="<?=$data['link_4']?>"> <i class="bi bi-linkedin"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>

        </div>

    </section><!-- /Doctors Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                    <?php
                $query="SELECT * FROM faq";
                $faq_row=mysqli_query($conn,$query);
                ?>
                    <div class="faq-container">
                        <?php
                    foreach($faq_row as $data)
                    {
                        ?>
                        <div class="faq-item ">
                            <!-- faq-active class to item -->
                            <h3><?=$data['faq_que']?></h3>
                            <div class="faq-content">
                                <p><?=$data['faq_ans']?></p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <?php
                    }
                    ?>
                    </div>

                </div><!-- End Faq Column-->

            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                    <h3>Testimonials</h3>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident.
                    </p>
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                    <?php
                        $query="SELECT * FROM testimonial";
                        $testimonial_row=mysqli_query($conn,$query);
                        ?>
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            }
                        }
                        </script>
                        <div class="swiper-wrapper">


                            <?php
                              foreach($testimonial_row as $data)
                              {
                                ?>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="admin/components/upload/<?=$data['test_img']?>"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3><?=$data['name']?></h3>
                                            <h4><?=$data['post']?></h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span><?=$data['message']?></span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                            <?php
                              }
                              ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Gallery</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">
                <?php
                $query="SELECT * FROM gallery";
                $edit=mysqli_query($conn,$query);
                foreach($edit as $gallery_row)
                {
                    ?>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="" class="glightbox" data-gallery="images-gallery">
                            <img src="admin/components/upload/<?=$gallery_row['image']?>" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <?php
                }
                ?>

            </div>

        </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
            <iframe style="border:0; width: 100%; height: 270px;" src="<?=$profile_row['map_link']?>" frameborder="0"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Location</h3>
                            <p><?=$profile_row['hos_address']?></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p><?=$profile_row['hos_no']?></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p><?=$profile_row['hos_email']?></p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="admin/components/save_contact.php" method="post" class="php-email-form"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="user_name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="user_email" placeholder="Your Email"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="user_no" placeholder="Contact Number"
                                    required>
                            </div>

                            <div class="col-md-12 mb-4">
                                <textarea class="form-control" name="user_message" rows="6"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>

<?php include "footer.php"; ?>