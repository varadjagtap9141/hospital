<?php include "navbar.php"; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="../components/save_faq.php" method="post">
                    <div class="row">
                        <h5 class="text-capitalize">Add FAQ's</h5>
                        <hr />
                        <div class="col-md-12 mb-3">
                            <label for="faq_que">Question</label>
                            <textarea class="form-control" rows="2" name="faq_que" id="faq_que" autofocus></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="faq_ans">Answer</label>
                            <textarea class="form-control" rows="2" name="faq_ans" id="faq_ans"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Question</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-body table-responsive">
                <h5 class="text-capitalize">FAQ's List</h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>SR.No</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM faq";
                        $result=mysqli_query($conn,$query);
                        foreach($result as $key=>$data)
                        {
                            ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$data['faq_que']?></td>
                            <td><?=$data['faq_ans']?></td>
                            <td>
                                <a href="edit_faq.php?faq_id=<?=$data['faq_id']?>">
                                    <button class="btn btn-sm btn-primary mx-1"><i class='bx bx-edit fs-6'></i></button>
                                </a>
                                <a onClick="return confirm('Are You Sure?');"
                                    href="../components/delete_faq.php?faq_id=<?=$data['faq_id']?>">
                                    <button class="btn btn-sm btn-danger mx-1"><i class='bx bx-trash fs-6'></i></button>
                                </a>
                            </td>
                        </tr>
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