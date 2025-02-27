<footer id="footer" class="footer light-background">

<div class="container footer-top">
<?php include "admin/master/connection.php";
          $query="SELECT * FROM profile";
          $result=mysqli_query($conn,$query);
          $row=mysqli_fetch_assoc($result);
          ?>
  <div class="row gy-4">
    <div class="col-lg-5 col-md-6 footer-about">
      <a href="index.html" class="logo d-flex align-items-center">
      <img src="admin/components/upload/<?=$row['footer_logo']?>" alt="">
        <span class="sitename"><?=$row['hos_name']?></span>
      </a>
      <div class="footer-contact pt-3">
        <p>A108 Adam Street</p>
        <p><?=$row['hos_address']?></p>
        <p class="mt-3"><strong>Phone:</strong> <span><?=$row['hos_no']?></span></p>
        <p><strong>Email:</strong> <span><?=$row['hos_email']?></span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href="<?=$row['link_1']?>"><i class="bi bi-twitter-x"></i></a>
        <a href="<?=$row['link_2']?>"><i class="bi bi-facebook"></i></a>
        <a href="<?=$row['link_3']?>"><i class="bi bi-instagram"></i></a>
        <a href="<?=$row['link_4']?>"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-6 col-md-3 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>

    <!-- <div class="col-lg-2 col-md-3 footer-links">
      <h4>Our Services</h4>
      <ul>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Product Management</a></li>
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Graphic Design</a></li>
      </ul>
    </div> -->

    <!-- <div class="col-lg-2 col-md-3 footer-links">
      <h4>Hic solutasetp</h4>
      <ul>
        <li><a href="#">Molestiae accusamus iure</a></li>
        <li><a href="#">Excepturi dignissimos</a></li>
        <li><a href="#">Suscipit distinctio</a></li>
        <li><a href="#">Dilecta</a></li>
        <li><a href="#">Sit quas consectetur</a></li>
      </ul>
    </div> -->

    <!-- <div class="col-lg-2 col-md-3 footer-links">
      <h4>Nobis illum</h4>
      <ul>
        <li><a href="#">Ipsam</a></li>
        <li><a href="#">Laudantium dolorum</a></li>
        <li><a href="#">Dinera</a></li>
        <li><a href="#">Trodelas</a></li>
        <li><a href="#">Flexo</a></li>
      </ul>
    </div> -->

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename"><?=$row['hos_name']?></strong> <span>All Rights Reserved</span></p>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>