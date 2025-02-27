<?php
session_start();
session_unset();
session_destroy();
session_start(); // Start a new session to store message
$_SESSION['message'] = "Logged out successfully!";
header("Location: ../index.php");
exit();

?>
