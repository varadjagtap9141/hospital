<?php include "../master/connection.php"; ?>
<?php
extract($_POST);
// print_r($_POST);
$update="UPDATE landing SET subtitle='$subtitle',why_subtitle='$why_subtitle',btn_title='$btn_title' where land_id='$land_id'";
$query=mysqli_query($conn,$update);
header("location:../master/details.php");
?>