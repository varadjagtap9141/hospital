<?php include "../master/connection.php";
extract($_GET);
$delete="DELETE FROM services WHERE service_id='$service_id'";
$query=mysqli_query($conn,$delete);
header("location:../master/service.php");
?>