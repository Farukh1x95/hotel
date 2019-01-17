<?php
include("connection.php");
$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);
$data =  mysqli_fetch_assoc($result);
//print_r($data);
  $user =  $data["username"];
  $pwrd =  $data["password"];

if(isset($_POST['login'] )) {
    $username = $_POST['username'];
    $password = $_POST['password'];
} if( $username == $user && $password == $pwrd ) {
    setcookie('username', $username, time() + (86400 * 30) ); //for One Day
    echo session_status();
    header("location: index.php");  
} else {
    header("login.php");
    echo '<a href="login.php">Login Again</a>';
}
?>
