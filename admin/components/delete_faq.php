<?php include "../master/connection.php"; 
extract($_GET);
$delete="DELETE FROM faq WHERE faq_id ='$faq_id'";
$query=mysqli_query($conn,$delete);
header("location:../master/faq.php");
?>