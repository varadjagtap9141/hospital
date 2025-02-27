<?php include "navbar.php";?>
<?php include "connection.php";
$query="SELECT * FROM contact";
$result=mysqli_query($conn,$query);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body table-responsive">
                <h5 class="text-capitalize">Enquiry List</h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>contact Number</th>
                            <th>Message</th>
                            <th>Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($result as $key=>$entry)
                        {
                            ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$entry['user_name']?></td>
                            <td><?=$entry['user_email']?></td>
                            <td><?=$entry['user_no']?></td>
                            <td><?=$entry['user_message']?></td>
                            <td><mark><?=$entry['create_at']?></mark></td>
                        </tr>
                        <?php
                        }
                        ?>
                        <?php
                                    if (mysqli_num_rows($result) == 0) {
                                    ?>
                        <tr>
                            <td class="py-3" colspan="6">
                                <h4>No Record Found</h4>
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