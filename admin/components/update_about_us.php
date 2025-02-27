<?php include "../master/connection.php"; ?>

<?php
extract($_POST);

if ($_FILES['about_img']['size'] > 0) {
    $about_img = time() .".jpg";
    move_uploaded_file($_FILES['about_img']['tmp_name'], "upload/" . $about_img);
    $update = "UPDATE about_us SET about_img='$about_img' WHERE about_id = '$about_id'";
    mysqli_query($conn, $update); 
} else 
{
    $update = "UPDATE about_us SET 
        about_title='$about_title',
        link='$link',
        about_desc='$about_desc',
        icon_1='$icon_1',
        icon_2='$icon_2',
        icon_3='$icon_3',
        title_1='$title_1',
        title_2='$title_2',
        title_3='$title_3',
        subtitle_1='$subtitle_1',
        subtitle_2='$subtitle_2',
        subtitle_3='$subtitle_3'
        WHERE about_id = '$about_id'";  
}
$query=mysqli_query($conn,$update);
header("location:../master/about.php");
?>
