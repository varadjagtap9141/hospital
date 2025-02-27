<?php include "../master/connection.php"; 
extract($_POST);
print_r($_POST);
$insert="INSERT INTO home_highlight(highlight_icon,highlight_title,highlight_subtitle) VALUES ('$highlight_icon','$highlight_title','$highlight_subtitle')";
$query=mysqli_query($conn,$insert);
header("location:../master/highlight.php");
?>