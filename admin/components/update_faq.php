<?php include "../master/connection.php";
extract($_POST);
$update="UPDATE faq SET faq_que='$faq_que',faq_ans='$faq_ans' WHERE faq_id='$faq_id'";
$query=mysqli_query($conn,$update);
header("location:../master/faq.php");
?>