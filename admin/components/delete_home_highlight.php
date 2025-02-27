<?php include "../master/connection.php";
extract($_GET);
$query="DELETE FROM home_highlight WHERE highlight_id = '$highlight_id'";

$result=mysqli_query($conn,$query);

header("location:../master/highlight.php");
?>