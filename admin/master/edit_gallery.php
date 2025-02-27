<?php include "../master/navbar.php"; ?>
<?php include "../master/connection.php";
extract($_GET);
$query="SELECT * FROM gallery where gallery_id = '$gallery_id'";
$edit=mysqli_query($conn,$query);
$gallery_row=mysqli_fetch_assoc($edit);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Images</h5>
                <hr />
                <form action="../components/update_gallery.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="gallery_id" value="<?=$gallery_row['gallery_id']?>">
                    <div class="col-md-6 mb-4">
                            <img class="w-100 h-100" src="../components/upload/<?=$gallery_row['image']?>" alt="">
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control" id="image" name="image" required />
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" class="btn btn-primary float-end">Update Image</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "../master/footer.php"; ?>