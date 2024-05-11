<?php
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == 'admin' && $password == 'admin') {
    setcookie("username", $username, time() + 3600, "/");
    session_start();
    $_SESSION['logged'] = 1;
    header("Location: booking.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}