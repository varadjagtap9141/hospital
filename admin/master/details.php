<?php include "navbar.php"; ?>
<?php include "connection.php"; ?>
<?php
$query="SELECT * FROM landing";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Manage Details</h5>
                <form action="../components/update_details.php" method="post">
                    <div class="row">
                        <input type="hidden" name="land_id" value="<?=$row['land_id']?>">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="subtitle">Hospital Subtitle</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" autofocus value="<?=$row['subtitle']?>" required/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="btn_title">Button Title</label>
                        <input type="text" class="form-control" id="btn_title" name="btn_title"  value="<?=$row['btn_title']?>" required/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="why_subtitle">Why Choose Us Description</label>
                        <!-- <input type="text" class="form-control" id="why_subtitle" name="why_subtitle"  value="<?=$row['why_subtitle']?>" required/> -->
                         <textarea class="form-control" id="why_subtitle" name="why_subtitle" rows="3" required><?=$row['why_subtitle']?></textarea>
                    </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?');" type="submit" class="btn btn-primary float-end">Update Details</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php include "footer.php"; ?>