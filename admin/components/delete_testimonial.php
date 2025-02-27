<?php include "../master/connection.php";
extract($_GET);
$delete="DELETE FROM testimonial WHERE test_id='$test_id'";

$query=mysqli_query($conn,$delete);

header("location:../master/testimonial.php");
?>