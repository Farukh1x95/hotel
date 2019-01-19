<?php
include("header.php");
include("connection.php");
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql ="INSERT INTO user (username, password) VALUE ('$username', '$password')";
    $result = mysqli_query($conn,$sql);
    echo "DONE!!";
} else {
    echo "Not interest..";
}  
?>
<html>

<body>
    <div class="jumbotron text-align">
        <form action="<?php $PHP_SELF ?>" method="post">
            <div class="form-group col-md-6 ">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Enter E-mail" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Sign Up</button>
        </form>
    </div>
</body>

</html>
<?php
include("footer.php");
?>
