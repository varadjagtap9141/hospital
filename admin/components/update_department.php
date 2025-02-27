<?php include "../master/connection.php"; ?>
<?php
extract($_POST);
extract($_FILES);
if($_FILES['img_1']['size']>0)
{
    $img_1=time().".jpg";
    move_uploaded_file($_FILES['img_1']['tmp_name'],"upload/".$img_1);
    $update="UPDATE department SET img_1='$img_1' WHERE department_id='$department_id'";
    mysqli_query($conn,$update);
}
if($_FILES['img_2']['size']>0)
{
    $img_2=time().".jpg";
    move_uploaded_file($_FILES['img_2']['tmp_name'],"upload/".$img_2);
    $update="UPDATE department SET img_2='$img_2' WHERE department_id='$department_id'";
    mysqli_query($conn,$update);
}
if($_FILES['img_3']['size']>0)
{
    $img_3=time().".jpg";
    move_uploaded_file($_FILES['img_3']['tmp_name'],"upload/".$img_3);
    $update="UPDATE department SET img_3='$img_3' WHERE department_id='$department_id'";
    mysqli_query($conn,$update);
}
if($_FILES['img_4']['size']>0)
{
    $img_4=time().".jpg";
    move_uploaded_file($_FILES['img_4']['tmp_name'],"upload/".$img_4);
    $update="UPDATE department SET img_4='$img_4' WHERE department_id='$department_id'";
    mysqli_query($conn,$update);
}
if($_FILES['img_5']['size']>0)
{
    $img_5=time().".jpg";
    move_uploaded_file($_FILES['img_5']['tmp_name'],"upload/".$img_5);
    $update="UPDATE department SET img_5='$img_5' WHERE department_id='$department_id'";
    mysqli_query($conn,$update);
}
$update="UPDATE department SET dept_name_1='$dept_name_1',subtitle_1='$subtitle_1',desc_1='$desc_1',
dept_name_2='$dept_name_2',subtitle_2='$subtitle_2',desc_2='$desc_2',
dept_name_3='$dept_name_3',subtitle_3='$subtitle_3',desc_3='$desc_3',
dept_name_4='$dept_name_4',subtitle_4='$subtitle_4',desc_4='$desc_4',
dept_name_5='$dept_name_5',subtitle_5='$subtitle_5',desc_5='$desc_5' WHERE 
department_id='$department_id'";
$query=mysqli_query($conn,$update);
header("location:../master/department.php");
?>