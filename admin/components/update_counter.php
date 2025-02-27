<?php include "../master/connection.php";
extract($_POST);
print_r($_POST);

$update="UPDATE about_counter SET counter_1='$counter_1', counter_2='$counter_2',counter_3='$counter_3',counter_4='$counter_4' where counter_id='$counter_id'";
$query=mysqli_query($conn,$update);
header("location:../master/counter.php");
?>