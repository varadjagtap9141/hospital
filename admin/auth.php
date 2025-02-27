<?php
session_start();
include "master/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone_no = trim($_POST['phone_no']);
    $password = trim($_POST['password']);

    if (empty($phone_no) || empty($password)) {
        $_SESSION['error'] = "All fields are required!";
        header("Location: index.php");
        exit();
    }

    $stmt = $conn->prepare("SELECT admin_id, password FROM admin WHERE phone_no = ?");
    $stmt->bind_param("s", $phone_no);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($admin_id, $db_password);
        $stmt->fetch();

        if ($password === $db_password) {
            $_SESSION['admin_id'] = $admin_id;
            header("Location: master/dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "Invalid credentials!";
            header("Location: index.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "User not found!";
        header("Location: index.php");
        exit();
    }

    $stmt->close();
}

?>
