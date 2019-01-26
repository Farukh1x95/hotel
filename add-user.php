<?php
include("header.php");
include("connection.php");
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql ="INSERT INTO user (username, password) VALUE ('$username', '$password')";
    $result = mysqli_query($conn,$sql);
    echo "DONE!!";
}
?>
<html>

<body>
    <style>
        #usr{
            border: 1px solid black;
            border-radius: 8px;
            padding: 20px;
            text-align-last: center;
        }
    </style>
    <div class="jumbotron text-align">
        <form action="<?php $PHP_SELF ?>" method="post">
            <div class="container col-md-4 " id="usr">
                <div class="form-group ">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Enter E-mail" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-success">Sign Up</button>
            </div>
        </form>
    </div>
</body>

</html>
<?php
include("footer.php");
?>
