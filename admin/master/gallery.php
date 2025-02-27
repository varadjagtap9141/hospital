<?php include "navbar.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Images</h5>
                <hr />
                <form action="../components/save_images.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control" id="image" name="image" required />
                        </div>
                    </div>
                    <button class="btn btn-primary float-end">Add Image</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-body table-responsive">
                <h5 class="text-capitalize">Gallery</h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>SRNO</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM gallery";
                        $gallery_row=mysqli_query($conn,$query);
                        foreach($gallery_row as $key=>$data)
                        {
                            ?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td>
                                    <img width="auto" height="120" src="../components/upload/<?=$data['image']?>" alt="">
                                </td>
                                <td>
                                     <a href="edit_gallery.php?gallery_id=<?=$data['gallery_id']?>">
                                        <button class="btn btn-primary btn-sm mx-1"><i class='bx bx-edit fs-6'></i></button>
                                     </a>
                                     <a href="../components/delete_gallery.php?gallery_id=<?=$data['gallery_id']?>">
                                        <button class="btn btn-danger btn-sm"><i class='bx bx-trash fs-6'></i></button>
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