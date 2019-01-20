<?php
include("connection.php");
include("header.php");
$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);
$data =  mysqli_fetch_assoc($result);
print_r($data);

//fetch from database.
  $user =  $data["username"];
  $pwrd =  $data["password"];
//form data for compare.
if(isset($_POST['login'] )) {
    $username = $_POST['username'];
    $password = $_POST['password'];
} if( $username == $user && $password == $pwrd ) {
    $cookie_name = $_COOKIE['$user'];
    $cookie_value = $_COOKIE['$user'];
    setcookie($cookie_name, $cookie_value, time() + (60*60*24) ); //for One Day
    session_start();
    header("location: index.php");  
} else {
    //header("location: login.php");
//echo '<button class="btn btn-primary align-center"><a style="color:white;" href="login.php">Login Again</a></button>';
//echo '<button class="btn btn-primary  align-center"><a style="color:white;" href="logout.php">Log out</a></button>';
}
?>
