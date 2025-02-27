<?php include "navbar.php"; ?>
<?php include "connection.php"; 
$query="SELECT * FROM department";
$result=mysqli_query($conn,$query);
$dept_row=mysqli_fetch_assoc($result);
?>

<div class="row">
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-body">
                <h5>Manage Department Information</h5>
                <hr />
                <form action="../components/update_department.php" method="post" enctype="multipart/form-data">
                    <div class="row ">
                        <input type="hidden" name="department_id" value="<?=$dept_row['department_id']?>">
                        <h6>Cardiology Department</h6>
                        <div class="col-md-6 mb-3 w-50">
                            <img width="100" height="auto" src="../components/upload/<?=$dept_row['img_1']?>" alt="department image" class="border">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="img_1">Department Image</label>
                            <input type="file" class="form-control" id="img_1" name="img_1" required/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="dept_name_1">Department Name</label>
                            <input type="text" class="form-control" id="dept_name_1" name="dept_name_1" required value="<?=$dept_row['dept_name_1']?>"/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="subtitle_1">Department Subtitle</label>
                            <input type="text" class="form-control" id="subtitle_1" name="subtitle_1" required value="<?=$dept_row['subtitle_1']?>"/>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="desc_1">Description</label>
                            <textarea class="form-control" id="desc_1" name="desc_1" rows="3" required><?=$dept_row['desc_1']?></textarea>
                        </div>
                    </div>
                    <hr/>
                    <div class="row ">
                        <h6>Neurology Department</h6>
                        <div class="col-md-6 mb-3 w-50">
                            <img width="100" height="auto" src="../components/upload/<?=$dept_row['img_2']?>" alt="department image" class="border">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="img_2">Department Image</label>
                            <input type="file" class="form-control" id="img_2" name="img_2" required/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="dept_name_2">Department Name</label>
                            <input type="text" class="form-control" id="dept_name_2" name="dept_name_2" required value="<?=$dept_row['dept_name_2']?>"/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="subtitle_2">Department Subtitle</label>
                            <input type="text" class="form-control" id="subtitle_2" name="subtitle_2" required value="<?=$dept_row['subtitle_2']?>"/>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="desc_2">Description</label>
                            <textarea class="form-control" id="desc_2" name="desc_2" rows="3" required><?=$dept_row['desc_2']?></textarea>
                        </div>
                    </div>
                    <hr/>
                    <div class="row ">
                        <h6>Hepatology Department</h6>
                        <div class="col-md-6 mb-3 w-50">
                            <img width="100" height="auto" src="../components/upload/<?=$dept_row['img_3']?>" alt="department image" class="border">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="img_3">Department Image</label>
                            <input type="file" class="form-control" id="img_3" name="img_3" required/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="dept_name_3">Department Name</label>
                            <input type="text" class="form-control" id="dept_name_3" name="dept_name_3" required value="<?=$dept_row['dept_name_3']?>"/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="subtitle_3">Department Subtitle</label>
                            <input type="text" class="form-control" id="subtitle_3" name="subtitle_3" required value="<?=$dept_row['subtitle_3']?>"/>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="desc_3">Description</label>
                            <textarea class="form-control" id="desc_3" name="desc_3" rows="3" required><?=$dept_row['desc_3']?></textarea>
                        </div>
                    </div>
                    <hr/>
                    <div class="row ">
                        <h6>Pediatrics Department</h6>
                        <div class="col-md-6 mb-3 w-50">
                            <img width="100" height="auto" src="../components/upload/<?=$dept_row['img_4']?>" alt="department image" class="border">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="img_4">Department Image</label>
                            <input type="file" class="form-control" id="img_4" name="img_4" required/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="dept_name_4">Department Name</label>
                            <input type="text" class="form-control" id="dept_name_4" name="dept_name_4" required value="<?=$dept_row['dept_name_4']?>"/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="subtitle_4">Department Subtitle</label>
                            <input type="text" class="form-control" id="subtitle_4" name="subtitle_4" required value="<?=$dept_row['subtitle_4']?>"/>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="desc_4">Description</label>
                            <textarea class="form-control" id="desc_4" name="desc_4" rows="3" required><?=$dept_row['desc_4']?></textarea>
                        </div>
                    </div>
                    <hr/>
                    <div class="row ">
                        <h6>Eye Care Department</h6>
                        <div class="col-md-6 mb-3 w-50">
                            <img width="100" height="auto" src="../components/upload/<?=$dept_row['img_5']?>" alt="department image" class="border">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="img_5">Department Image</label>
                            <input type="file" class="form-control" id="img_5" name="img_5" required/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="dept_name_5">Department Name</label>
                            <input type="text" class="form-control" id="dept_name_5" name="dept_name_5" required value="<?=$dept_row['dept_name_5']?>"/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="subtitle_5">Department Subtitle</label>
                            <input type="text" class="form-control" id="subtitle_5" name="subtitle_5" required value="<?=$dept_row['subtitle_5']?>"/>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="desc_5">Description</label>
                            <textarea class="form-control" id="desc_5" name="desc_5" rows="3" required><?=$dept_row['desc_5']?></textarea>
                        </div>
                    </div>
                    <button type="submit" onClick="return confirm('Are You Confirm?')" class="btn btn-primary float-end">Update Department</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>