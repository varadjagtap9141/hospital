<?php include "../master/connection.php"; ?>
<?php
extract($_POST);
$insert_faq="INSERT INTO faq(faq_que,faq_ans) VALUES ('$faq_que','$faq_ans')";
$data=mysqli_query($conn,$insert_faq);
header("location:../master/faq.php");
?>