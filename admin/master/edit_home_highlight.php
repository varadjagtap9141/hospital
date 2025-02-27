<?php include "navbar.php"; ?>
<?php include "connection.php"; 
extract($_GET);
$query="SELECT * FROM home_highlight WHERE highlight_id = '$highlight_id'";
$result=mysqli_query($conn,$query);
$fetch_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Home Page Highlights</h5>
                <hr/>
                <form action="../components/update_home_highlight.php" method="post">
                    <div class="row">
                        <input type="hidden" name="highlight_id" value="<?=$fetch_row['highlight_id']?>">
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="highlight_icon">Enter Icon Path</label>
                        <input type="text" class="form-control" id="highlight_icon" name="highlight_icon" autofocus required value="<?=$fetch_row['highlight_icon']?>"/>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="highlight_title">Enter Highlights Title</label>
                        <input type="text" class="form-control" id="highlight_title" name="highlight_title"  required value="<?=$fetch_row['highlight_title']?>"/>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="highlight_subtitle">Enter Highlights Subtitle</label>
                        <input type="text" class="form-control" id="highlight_subtitle" name="highlight_subtitle"  required value="<?=$fetch_row['highlight_subtitle']?>"/>
                    </div>
                    </div>
                    <button type="submit" onClick="return confirm('Are You Sure?')" class="btn btn-primary float-end">Add Highlights</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>