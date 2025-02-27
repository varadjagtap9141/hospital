<?php include "navbar.php"; ?>
<?php include "connection.php";
$query="SELECT * FROM about_counter";
$result=mysqli_query($conn,$query);
$about_row=mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5>Manage Counter</h5>
                <hr/>
                <form action="../components/update_counter.php" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="hidden" name="counter_id" value="<?=$about_row['counter_id']?>">
                            <label for="counter_1">Counter First</label>
                            <input type="number" id="counter_1" name="counter_1" class="form-control" required min="0"
                                max="10000" oninput="validateLength(this)" value="<?=$about_row['counter_1']?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="counter_2">Counter Second</label>
                            <input type="number" id="counter_2" name="counter_2" class="form-control" required min="0"
                                max="10000" oninput="validateLength(this)" value="<?=$about_row['counter_2']?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="counter_3">Counter Third</label>
                            <input type="number" id="counter_3" name="counter_3" class="form-control" required min="0"
                                max="10000" oninput="validateLength(this)" value="<?=$about_row['counter_3']?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="counter_4">Counter Fourth</label>
                            <input type="number" id="counter_4" name="counter_4" class="form-control" required min="0"
                                max="10000" oninput="validateLength(this)" value="<?=$about_row['counter_4']?>">
                        </div>
                    </div>
                    <button onClick="return confirm('Are You Sure?');" type="submit" class="btn btn-primary float-end">Update Counter</button>
                </form>
            </div>
        </div>
    </div>
    <script>
    function validateLength(input) {
        let value = parseInt(input.value);
        if (value < 0) {
            input.value = 0;
        } else if (value > 1000) {
            input.value = 1000;
        }
    }
    </script>
</div>
<?php include "footer.php"; ?>