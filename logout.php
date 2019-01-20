<?php

include("header.php");
   session_start();
    session_destroy();
unset($_COOKIE['$cookie_name']);
setcookie('$cookie_name', '', time()  -1 );
//echo '<a href="logout.php">LOGOUT</a>';
    header("login.php");
?>
