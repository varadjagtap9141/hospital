<?php include "../master/connection.php";
extract($_POST);
if($_FILES['test_img']['size']>0)
{
    $test_img=time().".jpg";
    move_uploaded_file($_FILES['test_img']['tmp_name'],"upload/".$test_img);
}
$insert="INSERT INTO testimonial(test_img,name,post,message) VALUES ('$test_img','$name','$post','$message')";
$query=mysqli_query($conn,$insert);
header("location:../master/testimonial.php");
?>