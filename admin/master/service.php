<?php include "navbar.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5>Manage Services</h5>
                <hr />
                <form action="../components/save_service.php" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="icon">Service Icon</label>
                            <input type="text" id="icon" name="icon" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="content_title">Content Title</label>
                            <input type="text" id="content_title" name="content_title" class="form-control" required
                                autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="content_desc">Content Description</label>
                            <textarea class="form-control" id="content_desc" name="content_desc" rows="2"
                                required></textarea>
                            <small id="word_count_msg" class="text-danger"></small>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Service</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">
                <h5 class="text-capitalize">Service List</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SR.No</th>
                            <th>Icon</th>
                            <th>Content Title</th>
                            <th>Content Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM services";
                        $row=mysqli_query($conn,$query);
                        foreach($row as $key=>$data)
                        {
                            ?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?=$data['icon']?></td>
                                <td><?=$data['content_title']?></td>
                                <td><small><?=$data['content_desc']?></small></td>
                                <td class="d-flex">
                                    <a href="edit_service.php?service_id=<?=$data['service_id']?>">
                                        <button class="btn btn-sm btn-primary mx-1"><i class='bx bx-edit fs-6'></i></button>
                                    </a>
                                    <a onClick="return confirm('Are You Sure?');" href="../components/delete_service.php?service_id=<?=$data['service_id']?>">
                                        <button class="btn btn-sm btn-danger mx-1"><i class='bx bxs-trash fs-6'></i></button>
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