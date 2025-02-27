<?php include "navbar.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Doctor</h5>
                <hr />
                <form action="../components/save_doctor.php" enctype="multipart/form-data" method="post">


                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="doctor_img">Profile Image</label>
                            <input type="file" class="form-control" id="doctor_img" name="doctor_img" required />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="doctor_name">Name</label>
                            <input type="text" class="form-control" id="doctor_name" name="doctor_name" required />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="position">Position</label>
                            <input type="text" class="form-control" id="position" name="position" required />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="dr_desc">About Doctor</label>
                            <textarea class="form-control" name="dr_desc" id="dr_desc" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <h6 class="text-capitalize">Profile URL's</h6>
                        <div class="col-md-3 mb-3">
                            <label for="link_1">X</label>
                            <input type="url" class="form-control" id="link_1" name="link_1" required />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="link_2">Facebook</label>
                            <input type="url" class="form-control" id="link_2" name="link_2" required />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="link_3">Instagram</label>
                            <input type="url" class="form-control" id="link_3" name="link_3" required />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="link_4">LinkedIn</label>
                            <input type="url" class="form-control" id="link_4" name="link_4" required />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Doctor</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive" style="scrollbar-width: none;">
                <table class="table table-bordered text-center">
                    <h5 class="text-capitalize">Doctor List</h5>
                    <thead>
                        <tr>
                            <th>SR.No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>About Doctor</th>
                            <th>X URL</th>
                            <th>Facebook URL</th>
                            <th>Instagram URL</th>
                            <th>LinkedIn URL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    extract($_GET);
                    $query="SELECT * FROM doctors";
                    $result=mysqli_query($conn,$query);
                    foreach($result as $key=>$data)
                    {
                        ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td class="w-25"><img class="rounded-circle" width="auto" height="70"
                                    src="../components/upload/<?=$data['doctor_img']?>" alt=""></td>
                            <td><small><?=$data['doctor_name']?></small></td>
                            <td><small><?=$data['position']?></small></td>
                            <td><small><?=$data['dr_desc']?></small></td>
                            <td><small><?=$data['link_1']?></small></td>
                            <td><small><?=$data['link_2']?></small></td>
                            <td><small><?=$data['link_3']?></small></td>
                            <td><small><?=$data['link_4']?></small></td>
                            <td class="d-flex">
                                <a href="edit_doctor.php?doctor_id=<?=$data['doctor_id']?>">
                                    <button class="btn btn-sm btn-primary mx-1"><i class='bx bx-edit fs-6'></i></button>
                                </a>
                                <a onClick="return confirm('Are You Sure?');"
                                    href="../components/delete_doctor.php?doctor_id=<?=$data['doctor_id']?>">
                                    <button class="btn btn-sm btn-danger mx-1"><i
                                            class='bx bxs-trash fs-6'></i></button>
                                </a>
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