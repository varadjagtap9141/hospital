<?php include "../master/connection.php"; ?>
<?php
extract($_POST);
// print_r($_POST);
$insert="INSERT INTO services(icon,content_title,content_desc) values ('$icon','$content_title','$content_desc')";
$query=mysqli_query($conn,$insert);
// print_r($query);
header("location:../master/service.php");
?>