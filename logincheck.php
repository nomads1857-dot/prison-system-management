<?php
session_start();
include('dbconnect.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // For demo - change password later
    if ($username == "admin" && $password == "prison2025") {
        $_SESSION['staffid'] = 'admin';
        $_SESSION['role'] = 'Admin';
        header("Location: admin/");
        exit();
    } else {
        $_SESSION['error'] = "Invalid username or password";
        header("Location: index.php");
        exit();
    }
}
?>