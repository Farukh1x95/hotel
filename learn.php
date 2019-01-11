<?php
 if(isset($_POST['submit'])){
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
     
echo ("Hello .$firstname");
 echo ("Hello.$lastname");
 }

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

</head>

<body>
    <style>

    </style>

    <div class="container" style="margin:200px">
        <form action="learn.php" method="post">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstname"><br>
            </div>
            <div class=form-group>
                <label>Last Name</label>
                <input type="text" name="lastname">
            </div>
            <input class="btn btn-primary" type="submit" name="submit">
        </form>
    </div>
</body>

</html>
