<?php include "../master/connection.php" ?>
<?php 
extract($_POST);
if($_FILES['doctor_img']['size']>0)
{
    $doctor_img=time().".jpg";
    move_uploaded_file($_FILES['doctor_img']['tmp_name'],"upload/".$doctor_img);
    $update="UPDATE doctors SET doctor_img='$doctor_img' WHERE doctor_id='$doctor_id'";
    mysqli_query($conn,$update);
}
$update="UPDATE doctors SET doctor_name='$doctor_name',
position='$position',
dr_desc='$dr_desc',
link_1='$link_1',
link_2='$link_2',
link_3='$link_3',
link_4='$link_4' WHERE doctor_id='$doctor_id'";
$query=mysqli_query($conn,$update);
header("location:../master/doctor.php");
?>