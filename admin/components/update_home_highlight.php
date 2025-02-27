<?php include "../master/connection.php";
extract($_POST);
$query="UPDATE home_highlight SET highlight_icon='$highlight_icon',
highlight_title='$highlight_title',
highlight_subtitle='$highlight_subtitle'
WHERE highlight_id='$highlight_id'";

$result=mysqli_query($conn,$query);

header("location:../master/highlight.php");
?>