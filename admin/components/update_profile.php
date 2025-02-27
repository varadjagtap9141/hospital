<?php include "../master/connection.php"; ?>
<?php
extract($_POST);
if($_FILES['hos_logo']['size']>0)
{
    $hos_logo=time().".jpg";
    move_uploaded_file($_FILES['hos_logo']['tmp_name'],"upload/".$hos_logo);
    $update="UPDATE profile SET hos_logo='$hos_logo'";
    mysqli_query($conn,$update);
}
if($_FILES['favicon']['size']>0)
{
    $favicon=time().".jpg";
    move_uploaded_file($_FILES['favicon']['tmp_name'],"upload/".$favicon);
    $update="UPDATE profile SET favicon='$favicon'";
    mysqli_query($conn,$update);
}
if($_FILES['footer_logo']['size']>0)
{
    $footer_logo=time().".jpg";
    move_uploaded_file($_FILES['footer_logo']['tmp_name'],"upload/".$footer_logo);
    $update="UPDATE profile SET footer_logo='$footer_logo'";
    mysqli_query($conn,$update);
}
$update="UPDATE profile SET hos_name='$hos_name',hos_email='$hos_email',hos_address='$hos_address',hos_no='$hos_no',map_link='$map_link',title='$title',link_1='$link_1',link_2='$link_2',link_3='$link_3',link_4='$link_4'";
$query=mysqli_query($conn,$update);
header("location:../master/profile.php");
?>