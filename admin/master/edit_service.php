<?php include "../master/connection.php";?>
<?php include "../master/navbar.php";?>
<?php
extract($_GET);
$query="SELECT * FROM services WHERE service_id='$service_id'";
$result=mysqli_query($conn,$query);
$service_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5>Update Services</h5>
                <hr />
                <form action="../components/update_service.php" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="hidden" name="service_id" value="<?=$service_row['service_id']?>">
                            <label for="icon">Service Icon</label>
                            <input type="text" id="icon" name="icon" class="form-control" required value="<?=$service_row['icon']?>" autofocus>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="content_title">Content Title</label>
                            <input type="text" id="content_title" name="content_title" class="form-control" required value="<?=$service_row['content_title']?>"
                                autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="content_desc">Content Description</label>
                            <textarea class="form-control" id="content_desc" name="content_desc" rows="2"
                                required ><?=$service_row['content_desc']?></textarea>
                            <small id="word_count_msg" class="text-danger"></small>
                        </div>

                    </div>
                    <button onClick="return confirm('Are You Sure?')" type="submit" class="btn btn-primary float-end">Update Service</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "../master/footer.php";?>
