<?php
include("header.php");
session_start();
session_unset();
session_destroy();
unset($_SESSION['$username']);
unset($_COOKIE['$username']);
setcookie('username', '', time()  - 3600);
header("location: login.php");
?>
