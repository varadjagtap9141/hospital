<?php include "navbar.php"; ?>
<?php include "connection.php";
extract($_GET);
$edit="SELECT * FROM faq WHERE faq_id ='$faq_id'";
$query=mysqli_query($conn,$edit);
$edit_row=mysqli_fetch_assoc($query);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="../components/update_faq.php" method="post">
                    <div class="row">
                        <h5 class="text-capitalize">Manage FAQ's</h5>
                        <hr />
                        <input type="hidden" name="faq_id" value="<?=$edit_row['faq_id']?>">
                        <div class="col-md-12 mb-3">
                            <label for="faq_que">Question</label>
                            <textarea class="form-control" rows="2" name="faq_que" id="faq_que" autofocus><?=$edit_row['faq_que']?></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="faq_ans">Answer</label>
                            <textarea class="form-control" rows="2" name="faq_ans" id="faq_ans"><?=$edit_row['faq_ans']?></textarea>
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?')" type="submit" class="btn btn-primary float-end">Update Question</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
