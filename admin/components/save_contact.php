<?php include "../master/connection.php";
extract($_POST);
$query="INSERT INTO contact(user_name,user_email,user_no,user_message) VALUES ('$user_name','$user_email','$user_no','$user_message')";
$insert=mysqli_query($conn,$query);
header("location:../../index.php");
?>