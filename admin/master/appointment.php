<?php include "navbar.php";?>
<?php include "connection.php";
$query = "SELECT appointment.*, hospital_department.department_name, doctors.doctor_name 
FROM appointment 
JOIN hospital_department ON appointment.department_id = hospital_department.department_id 
JOIN doctors ON appointment.doctor_id = doctors.doctor_id";

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
                            <th>contact Number</th>
                            <th>Department</th>
                            <th>Doctor</th>
                            <th>Status</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($result as $key=>$data)
                        {
                            ?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?=$data['name']?></td>
                                <td><?=$data['phone']?></td>
                                <td><?=$data['department_name']?></td>
                                <td><?=$data['doctor_name']?></td>
                                <td class="text-uppercase"><?=$data['status']?></td>
                                <!-- <td>
                                    <a href="view_appointment.php"><button class="btn btn-primary btn-sm">View</button></a>
                                </td> -->
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
