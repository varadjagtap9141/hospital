<?php include "../master/connection.php";
extract($_POST);
if($_FILES['image']['size']>0)
{
    $image=time().".jpg";
    move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$image);
    $update="UPDATE gallery SET image='$image' WHERE gallery_id='$gallery_id'";
    mysqli_query($conn,$update);
    header("location:../master/gallery.php");
}
?>