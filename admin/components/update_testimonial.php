<?php include "../master/connection.php";
extract($_POST);
if($_FILES['test_img']['size']>0)
{
    $test_img=time().".jpg";
    move_uploaded_file($_FILES['test_img']['tmp_name'],"upload/".$test_img);
    $update="UPDATE testimonial SET test_img='$test_img' WHERE test_id='$test_id'";
    mysqli_query($conn,$update);
}
$update="UPDATE testimonial SET name='$name',post='$post',message='$message' WHERE test_id='$test_id'";
$query=mysqli_query($conn,$update);
header("location:../master/testimonial.php");
?>