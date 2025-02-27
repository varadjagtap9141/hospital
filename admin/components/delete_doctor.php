<?php include "../master/connection.php"; ?>
<?php
extract($_GET);

$query="DELETE FROM doctors WHERE doctor_id='$doctor_id'";
$result=mysqli_query($conn,$query);
header("location:../master/doctor.php");
?>