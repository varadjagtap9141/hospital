<?php include "navbar.php";?>
<?php include "connection.php";?>
<?php
        $query="SELECT * FROM about_us";
        $result=mysqli_query($conn,$query);
        $about_row=mysqli_fetch_assoc($result);
        // print_r($about_row);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Manage About Details</h5>
                <hr/>
                <form action="../components/update_about_us.php" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <input type="hidden" name="about_id" value="<?=$about_row['about_id']?>">
                        <div class="col-md-6 mb-3 overflow-hidden">
                            <img class="w-100 h-100 border"
                                src="../components/upload/<?=$about_row['about_img']?>"
                                alt="about_us_img">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="about_img">About Us Image</label>
                            <input type="file" class="form-control" id="about_img" name="about_img" required
                                 />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="about_title">About Us Title</label>
                            <input type="text" class="form-control" id="about_title" name="about_title"
                                value="<?=$about_row['about_title']?>" autofocus required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="about_desc">About Us Description</label>
                            <textarea class="form-control" id="about_desc" name="about_desc" rows="3"
                                required><?=$about_row['about_desc']?></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="link">YouTube Link</label>
                            <input type="url" class="form-control" id="link" name="link" value="<?=$about_row['link']?>"
                                required />
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <h6>About Us Icons & key Points</h6>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="icon_1">About Us Icon 1</label>
                            <input type="text" class="form-control" id="icon_1" name="icon_1" required
                                value="<?=$about_row['icon_1']?>" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="icon_2">About Us Icon 2</label>
                            <input type="text" class="form-control" id="icon_2" name="icon_2" required
                                value="<?=$about_row['icon_2']?>" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="icon_3">About Us Icon 3</label>
                            <input type="text" class="form-control" id="icon_3" name="icon_3" required
                                value="<?=$about_row['icon_3']?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="title_1">Key Points 1</label>
                            <input type="text" class="form-control" id="title_1" name="title_1" required
                                value="<?=$about_row['title_1']?>" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="title_2">Key Points 2</label>
                            <input type="text" class="form-control" id="title_2" name="title_2" required
                                value="<?=$about_row['title_2']?>" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="title_3">Key Points 3</label>
                            <input type="text" class="form-control" id="title_3" name="title_3" required
                                value="<?=$about_row['title_3']?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="subtitle_1">Key Sub Point 1</label>
                            <textarea class="form-control" id="subtitle_1" name="subtitle_1" rows="2"
                                required><?=$about_row['subtitle_1']?></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="subtitle_2">Key Sub Point 2</label>
                            <textarea class="form-control" id="subtitle_2" name="subtitle_2" rows="2"
                                required><?=$about_row['subtitle_2']?></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="subtitle_3">Key Sub Point 2</label>
                            <textarea class="form-control" id="subtitle_3" name="subtitle_3" rows="2"
                                required><?=$about_row['subtitle_3']?></textarea>
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?');" type="submit" class="btn btn-primary float-end">Update Details</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";?>