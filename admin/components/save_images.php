<?php include "../master/connection.php";
extract($_POST);
if($_FILES['image']['size']>0)
{
    $image=time().".jpg";
    move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$image);
    $insert="INSERT INTO gallery(image) VALUES ('$image')";
    mysqli_query($conn,$insert);
    header("location:../master/gallery.php");
}
?>