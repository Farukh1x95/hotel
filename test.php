<?php
 if(isset($_POST['login'])){
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];   
echo ("Hello .$firstname <br>"); 
 echo ("Hello.$lastname");
 }

//Get Cookie Value
 if( isset($_COOKIE['$user']))
            echo "Welcome " . $_COOKIE['$user'] . "<br />";
         
         else
            echo "Sorry... Not recognized" . "<br />"
?>
<html>

<head>
    <title>PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

</head>

<body>

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
            <input class="btn btn-primary" type="submit" name="login">
        </form>
    </div>
</body>

</html>