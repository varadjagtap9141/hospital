<?php include "navbar.php"; ?>
<?php include "connection.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-capitalize">Add Testimonials</h5>
                <hr />
                <form action="../components/save_testimonial.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="test_img">Profile Image</label>
                            <input type="file" class="form-control" id="test_img" name="test_img" required />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="post">Post</label>
                            <input type="text" class="form-control" id="post" name="post" required />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary float-end">Add Testimonial</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-4">
        <div class="card card-body table-responsive">
            <h5 class="text-capitalize">Review List</h5>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Post</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query="SELECT * FROM testimonial";
                    $test_row=mysqli_query($conn,$query);
                    foreach($test_row as $key=>$data)
                    {
                        ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><img class="rounded-circle border" width="auto" height="80" src="../components/upload/<?=$data['test_img']?>" alt=""></td>
                        <td><?=$data['name']?></td>
                        <td><?=$data['post']?></td>
                        <td><?=$data['message']?></td>
                        <td>
                            <a href="edit_testimonial.php?test_id=<?=$data['test_id']?>">
                                <button class="btn btn-sm btn-primary mx-1"><i class='bx bx-edit fs-6'></i></button>
                            </a>
                            <a onClick="return confirm('Are You Sure?');" href="../components/delete_testimonial.php?test_id=<?=$data['test_id']?>">
                                <button class="btn btn-sm btn-danger mx-1"><i class='bx bx-trash fs-6'></i></button>
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
<?php include "footer.php"; ?>