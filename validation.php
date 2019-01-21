<?php
include("connection.php");
include("header.php");
$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);
$row =  mysqli_fetch_array($result);
//print_r($row);

//fetch from database.
$user =  $row["username"];
$pwrd =  $row["password"];
//form data for compare.
if(isset($_POST["login"] )) {
    $username = $_POST["username"];
    $password = $_POST["password"];
} if( $username == $user && $password == $pwrd ) {
    //$cookie_name = $_COOKIE['$username'];
    //$cookie_value = $_COOKIE['$username'];
    setcookie($username, $username, time() + (60*60*24) ); //for One Day
    session_start();
    $_SESSION['$username'] = $username;
    header("location: index.php");  
} else {
    header("location: login.php");
//echo '<button class="btn btn-primary align-center"><a style="color:white;" href="login.php">Login Again</a></button>';
//echo '<button class="btn btn-primary  align-center"><a style="color:white;" href="logout.php">Log out</a></button>';
}
?>
