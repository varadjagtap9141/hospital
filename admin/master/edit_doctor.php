<?php include "navbar.php"; ?>
<?php include "connection.php"; 
extract($_GET);
$query="SELECT * FROM doctors WHERE doctor_id='$doctor_id'";
$result=mysqli_query($conn,$query);
$doctor_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Manage Doctor</h5>
                <form action="../components/update_doctor.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="doctor_id" value="<?=$doctor_row['doctor_id']?>">
                        <div class="col-md-6 mt-3">
                            <img class="w-100 h-100" src="../components/upload/<?=$doctor_row['doctor_img']?>"
                                alt="doctor profile img">
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="doctor_img">Profile Image</label>
                                    <input type="file" class="form-control" id="doctor_img" name="doctor_img"
                                        required/>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="doctor_name">Name</label>
                                    <input type="text" class="form-control" id="doctor_name" name="doctor_name"
                                        required value="<?=$doctor_row['doctor_name']?>"/>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="position">Position</label>
                                    <input type="text" class="form-control" id="position" name="position" required value="<?=$doctor_row['position']?>"/>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="dr_desc">About Doctor</label>
                                    <textarea class="form-control" name="dr_desc" id="dr_desc" rows="3" required><?=$doctor_row['dr_desc']?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <h6 class="text-capitalize">Profile URL's</h6>
                        <div class="col-md-3 mb-3">
                            <label for="link_1">X</label>
                            <input type="text" class="form-control" id="link_1" name="link_1" required value="<?=$doctor_row['link_1']?>"/>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="link_2">Facebook</label>
                            <input type="text" class="form-control" id="link_2" name="link_2" required value="<?=$doctor_row['link_2']?>"/>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="link_3">Instagram</label>
                            <input type="text" class="form-control" id="link_3" name="link_3" required value="<?=$doctor_row['link_3']?>"/>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="link_4">LinkedIn</label>
                            <input type="text" class="form-control" id="link_4" name="link_4" required value="<?=$doctor_row['link_4']?>"/>
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" type="submit"
                        class="btn btn-primary float-end">Update Doctor</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>