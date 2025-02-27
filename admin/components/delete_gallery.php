<?php include "../master/connection.php"; 
extract($_GET);
$query="DELETE FROM gallery WHERE gallery_id='$gallery_id'";

$result=mysqli_query($conn,$query);

header("location:../master/gallery.php");
?>