<?php include "navbar.php"; ?>
<?php include "connection.php"; 
extract($_GET);
$query="SELECT * FROM testimonial WHERE test_id='$test_id'";

$result=mysqli_query($conn,$query);

$test_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-body">
            <form action="../components/update_testimonial.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <input type="hidden" name="test_id" value="<?=$test_row['test_id']?>">
                    <div class="col-md-6 mt-3">
                        <img class="w-100 h-100" src="../components/upload/<?=$test_row['test_img']?>"
                            alt="test profile img">
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="test_img">Profile Image</label>
                                <input type="file" class="form-control" id="test_img" name="test_img" required />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required
                                    value="<?=$test_row['name']?>" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="post">Post</label>
                                <input type="text" class="form-control" id="post" name="post" required
                                    value="<?=$test_row['post']?>" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="message">About Doctor</label>
                                <textarea class="form-control" name="message" id="message" rows="3"
                                    required><?=$test_row['message']?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button onClick="return confirm('Are You Sure?')" class="btn btn-primary float-end">Update Testimonial</button>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>