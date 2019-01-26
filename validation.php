<?php
include("connection.php");
include("header.php");
$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);
$row =  mysqli_fetch_assoc($result);
print_r($row);

//fetch from database.
foreach($result as $row){
$user = $row['username'] ;
$pwrd = $row['password'] ;

//form data for compare.
if(isset($_POST["login"] )) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
} if($user == $username && $pwrd == $password ) {
    setcookie('$username', 'username', time() + (60*60*24) ); //for One Day
    session_start();
    $_SESSION['username'] = $username;
    header("location: index.php");  
} else {
    header("location: login.php");
}
}
//echo '<button class="btn btn-primary align-center"><a style="color:white;" href="login.php">Login Again</a></button>';
//echo '<button class="btn btn-primary  align-center"><a style="color:white;" href="logout.php">Log out</a></button>';
     

?>
