
</div>
<?php include "connection.php";
          $query="SELECT * FROM profile";
          $result=mysqli_query($conn,$query);
          $row=mysqli_fetch_assoc($result);
          // print_r($row);
          ?>
<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    © <?=$row['hos_name']?>
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , By
                    <a href="http://localhost/medilab/" target="_blank" class="footer-link"><?=$row['title']?></a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <!-- <a
                      href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                      target="_blank"
                      class="footer-link"
                      >Support</a
                    > -->
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- <div class="buy-now">
      <a
        href="support.php"
        class="btn btn-danger btn-buy-now"
        >Support</a
      >
    </div> -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../admin_assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../admin_assets/vendor/libs/popper/popper.js"></script>
    <script src="../admin_assets/vendor/js/bootstrap.js"></script>
    <script src="../admin_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../admin_assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../admin_assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../admin_assets/js/main.js"></script>
    <script src="../admin_assets/js/script.js"></script>

    <!-- Page JS -->
    <script src="../admin_assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
