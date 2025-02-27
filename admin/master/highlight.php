<?php include "navbar.php";?>
<?php include "connection.php";?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Home Page Highlights</h5>
                <hr/>
                <form action="../components/save_home_highlight.php" method="post">
                    <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="highlight_icon">Enter Icon Path</label>
                        <input type="text" class="form-control" id="highlight_icon" name="highlight_icon" autofocus required/>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="highlight_title">Enter Highlights Title</label>
                        <input type="text" class="form-control" id="highlight_title" name="highlight_title"  required/>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="highlight_subtitle">Enter Highlights Subtitle</label>
                        <input type="text" class="form-control" id="highlight_subtitle" name="highlight_subtitle"  required/>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Highlights</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-body table-responsive">
                <h5 class="text-capitalize">Home Page Highlights List</h5>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Icon Path</th>
                        <th>Highlights Title</th>
                        <th>Highlights Subtitle</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query="SELECT * FROM home_highlight";
                    $highlight_row=mysqli_query($conn,$query);
                    foreach($highlight_row as $key=>$data)
                    {
                        ?>
                        <tr>
                            <td>
                                <?=$key+1?>
                            </td>
                            <td><?=$data['highlight_icon']?></td>
                            <td><?=$data['highlight_title']?></td>
                            <td><?=$data['highlight_subtitle']?></td>
                            <td>
                                <a href="edit_home_highlight.php?highlight_id=<?=$data['highlight_id']?>">
                                    <button class="btn btn-primary btn-sm mx-1"><i class='bx bx-edit fs-6'></i></button>
                                </a>
                                <a onClick="return confirm('Are You Sure?');" href="../components/delete_home_highlight.php?highlight_id=<?=$data['highlight_id']?>">
                                    <button class="btn btn-danger btn-sm mx-1"><i class='bx bx-trash fs-6'></i></button>
                                </a>
                            </td>
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
<?php include "footer.php";?>