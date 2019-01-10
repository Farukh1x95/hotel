<?php
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Create connection
mysqli_connect($servername, $username, $password);
mysqli_select_db($dbname);


if (isset(['admin']))
    
    $username = $_POST['admin'];
    $password = $_POST['pswd'];
    
$sql = "SELECT * FROM admin where Admin_name='".$username."' AND '".$password."' limit 1 ";

 $result =  mysqli_query($sql);

    if(mysql_num_rows($result)!== 1)
    {
        echo("You Succesfully login Admin !!!");
        exit();   
    }  
else {
        echo("Wrng info input XXXX");
        exit();
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" >
       <div class="container " >
           <h2>Admin login</h2>
        </div>         
    <div class="container">
     <form action="admin.php" method="POST">
      <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="admin">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
</body>
</html>