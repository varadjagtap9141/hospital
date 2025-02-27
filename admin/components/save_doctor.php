<?php include "../master/connection.php";
extract($_POST);
if($_FILES['doctor_img']['size']>0)
{
    $doctor_img=time().".jpg";
    move_uploaded_file($_FILES['doctor_img']['tmp_name'],"upload/".$doctor_img);
}
else
{
    $doctor_img="";
}
$insert="INSERT INTO doctors(doctor_name,doctor_img,position,dr_desc,link_1,link_2,link_3,link_4) VALUES ('$doctor_name','$doctor_img','$position','$dr_desc','$link_1','$link_2','$link_3','$link_4')";
$query=mysqli_query($conn,$insert);
// print_r($query);
header("location:../master/doctor.php");
?>