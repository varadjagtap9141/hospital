<?php
$host="localhost";
$username="root";
$password="sql1234";
$database="medilab";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>