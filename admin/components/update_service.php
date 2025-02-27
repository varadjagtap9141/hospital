<?php include "../master/connection.php";
extract($_POST);
$query="UPDATE services SET icon='$icon',content_title='$content_title',content_desc='$content_desc' WHERE service_id = '$service_id'";
$result=mysqli_query($conn,$query);
header("location:../master/service.php");
?>