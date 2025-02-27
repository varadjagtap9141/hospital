<?php include "../master/connection.php"; ?>
<?php
extract($_POST);
// print_r($_POST);
$query="INSERT INTO appointment(name,email,phone,message,doctor_id,department_id) values ('$name','$email','$phone','$message','$doctor_id','$department_id')";

$insert=mysqli_query($conn,$query);

header("location:../../index.php");
?>