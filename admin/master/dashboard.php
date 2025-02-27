<?php include "navbar.php"; ?>
<?php include "connection.php";?>
<?php
extract($_POST);
$query="SELECT * FROM admin Where admin_id='$_SESSION[admin_id]'";
$result=mysqli_query($conn,$query);
$admin=mysqli_fetch_assoc($result);
?>
<div class="row">
                <div class="col-xl-8 mb-6 order-0">
                  <div class="card">
                    <div class="d-flex align-items-start row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary mb-3">Congratulations <?=$admin['name']?> 🎉</h5>
                          <p class="mb-6">
                            You have done 72% more sales today.<br />Check your new badge in your profile.
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-6">
                          <img
                            src="../admin_assets/img/illustrations/man-with-laptop.png"
                            height="175"
                            class="scaleX-n1-rtl"
                            alt="View Badge User" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../admin_assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded text-muted"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <p class="mb-1">Profit</p>
                          <h4 class="card-title mb-3">$12,628</h4>
                          <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../admin_assets/img/icons/unicons/wallet-info.png"
                                alt="wallet info"
                                class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded text-muted"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <p class="mb-1">Sales</p>
                          <h4 class="card-title mb-3">$4,679</h4>
                          <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
</div>
              <div class="row">
                <?php
                $query="SELECT * FROM contact";
                $result=mysqli_query($conn,$query);
                ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">
                <h5 class="text-capitalize">Enquiry List</h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>contact Number</th>
                            <th>Message</th>
                            <th>Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($result as $key=>$entry)
                        {
                            ?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?=$entry['user_name']?></td>
                                <td><?=$entry['user_email']?></td>
                                <td><?=$entry['user_no']?></td>
                                <td><?=$entry['user_message']?></td>
                                <td><mark><?=$entry['create_at']?></mark></td>
                            </tr>
                            <?php
                        }
                        ?>
                         <?php
                                    if (mysqli_num_rows($result) == 0) {
                                    ?>
                        <tr>
                            <td class="py-3" colspan="6">
                                <h4>No Record Found</h4>
                            </td>
                        </tr>
                        <?php
                                    }
                                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
$query = "SELECT appointment.*, hospital_department.department_name, doctors.doctor_name 
FROM appointment 
JOIN hospital_department ON appointment.department_id = hospital_department.department_id 
JOIN doctors ON appointment.doctor_id = doctors.doctor_id";

$result=mysqli_query($conn,$query);
?>
<div class="row">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-body table-responsive" style="scrollbar-width:none;">
                <h5 class="text-capitalize">Appointment List</h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>contact Number</th>
                            <th>Department</th>
                            <th>Doctor</th>
                            <th>Status</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($result as $key=>$data)
                        {
                            ?>
                             <tr>
                                <td><?=$key+1?></td>
                                <td><?=$data['name']?></td>
                                <td><?=$data['phone']?></td>
                                <td><?=$data['department_name']?></td>
                                <td><?=$data['doctor_name']?></td>
                                <td class="text-uppercase"><?=$data['status']?></td>
                                <!-- <td>
                                    <a href="view_appointment.php"><button class="btn btn-primary btn-sm">View</button></a>
                                </td> -->
                            </tr>
                            <?php
                        }
                        ?>
                        <?php
                                    if (mysqli_num_rows($result) == 0) {
                                    ?>
                        <tr>
                            <td class="py-3" colspan="6">
                                <h4>No Record Found</h4>
                            </td>
                        </tr>
                        <?php
                                    }
                                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
