<?php

include("header.php");
   session_start();
    session_destroy();
echo '<a href="logout.php">LOGOUT</a>';
    header("login.php");
?>
