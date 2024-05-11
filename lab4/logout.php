<?php
session_start();
setcookie("username", "", time() - 3600, "/");
unset($_SESSION['logged']);
session_destroy();
header("Location: login.php");
exit();