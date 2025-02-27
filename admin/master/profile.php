<?php include "navbar.php"?>
<?php include "connection.php"?>
<div class="row">
   <div class="col-md-12">
    <div class="card">
        <div class="card-body">
          <?php
          $query="SELECT * FROM profile";
          $result=mysqli_query($conn,$query);
          $row=mysqli_fetch_assoc($result);
          // print_r($row);
          ?>
            <h5 class="text-capitalize fw-semibold">Manage Profile</h5>
            <hr/>
            <h6>Basic Information</h6>
            <form action="../components/update_profile.php" enctype="multipart/form-data" method="post">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label class="form-label" for="hos_name">Hospital Name</label>
                        <input type="text" class="form-control" id="hos_name" name="hos_name" autofocus value="<?=$row['hos_name']?>" required/>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label class="form-label" for="hos_email">Hospital Email</label>
                        <input type="email" class="form-control" id="hos_email" name="hos_email"  value="<?=$row['hos_email']?>" required/>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label class="form-label" for="hos_address">Hospital Address</label>
                        <input type="text" class="form-control" id="hos_address" name="hos_address"  value="<?=$row['hos_address']?>" required/>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label class="form-label" for="hos_no">Contact Number</label>
                        <input type="number" class="form-control" id="hos_no" name="hos_no"  value="<?=$row['hos_no']?>" required/>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label class="form-label" for="map_link">Google Map Link</label>
                        <input type="url" class="form-control border" id="map_link" name="map_link"  value="<?=$row['map_link']?>" required/>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"  value="<?=$row['title']?>" required/>
                    </div>
                </div>
                <hr class="mt-6"/>
                <div class="row">
                    <div class="col-md-8 mt-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="hos_logo">Hospital Logo</label>
                                <input type="file" class="form-control" id="hos_logo" name="hos_logo"  />
                                <img class="border mt-3" src="../components/upload/<?=$row['hos_logo']?>" width="100" height="auto" alt="logo">
                            </div>
                            <div class="col-md-4">
                            <label class="form-label" for="favicon">Favicon Logo</label>
                                <input type="file" class="form-control" id="favicon" name="favicon" />
                                <img class="border mt-3" src="../components/upload/<?=$row['favicon']?>" width="100" height="auto" alt="favicon">
                            </div>
                            <div class="col-md-4">
                            <label class="form-label" for="footer_logo">Footer Logo</label>
                                <input type="file" class="form-control" id="footer_logo" name="footer_logo"  />
                                <img class="border mt-3" src="../components/upload/<?=$row['footer_logo']?>" width="100" height="auto" alt="logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <h6 class="fw-normal">Social Media Links</h6>
                    <div class="row">
                          <label class="col-sm-3 col-form-label" for="link_1">X</label>
                          <div class="col-sm-9">
                            <input type="url" class="form-control" value="<?=$row['link_1']?>" id="link_1" name="link_1" />
                          </div>
                        </div>
                        <div class="row mt-4">
                          <label class="col-sm-3 col-form-label" for="link_2">Facebook</label>
                          <div class="col-sm-9">
                            <input
                              type="url"
                              class="form-control"
                              id="link_2"
                              value="<?=$row['link_2']?>"
                              name="link_2" />
                          </div>
                        </div>
                        <div class="row mt-4">
                          <label class="col-sm-3 col-form-label" for="link_3">Instagram</label>
                          <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                              <input
                                type="url"
                                id="link_3"
                                value="<?=$row['link_3']?>"
                                name="link_3"
                                class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="row mt-4">
                          <label class="col-sm-3 col-form-label" for="link_4">LinkedIn</label>
                          <div class="col-sm-9">
                            <input
                              type="url"
                              id="link_4"
                              value="<?=$row['link_4']?>"
                              class="form-control"
                              name="link_4"
                              />
                          </div>
                        </div>
                    </div>
                </div>
                <button onClick="return confirm('Are You Sure?');" type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
    </div>
   </div>
</div>
<?php include "footer.php"?>