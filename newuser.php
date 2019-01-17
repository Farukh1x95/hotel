<?php
include("header.php");
   
$username = $_POST["username"];
$password = $_POST["password"];

$sql ="INSERT INTO user (username, password) VALUE ('$$username', '$password')";
$result = mysqli_query($conn,$sql);
if(!$result) 
{ die('Error : Query Not Executed. Please Fix the Issue! ' . mysql_error()); } else 
{ echo "Data Inserted Successully!!!"; }

?>
<!doctype html>
<html>

<body>

    <?php  // include $_SERVER["DOCUMENT_ROOT"]."/jsonadd.html";?>
    <div class="container">
        <form action="#" method="POST">
            <div class="form-group row">
                <label for="inputName" class="col-sm-1-12 col-form-label"></label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="username" id="inputName" placeholder="First Name">
                </div>
            </div>
            <fieldset class="form-group row">
                <legend class="col-form-legend col-sm-1-12">Group name</legend>
                <div class="col-sm-1-12">
                    <input type="text" name="password">
                </div>
            </fieldset>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Action</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
<?php
include("footer.php");
?>
