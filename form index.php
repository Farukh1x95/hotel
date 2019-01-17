<?php
include("header.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD HOTEL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <style>
      .form{
        margin: 50px; 
      }
       
  </style>
   <div class="form">
    <div class="container" >
        <h2>Add New Hotel</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="hotel_name">Hotel Name</label>
                <input type="text" class="form-control" name="hotel_name" placeholder="Hotel Name" required>
            </div>
            <div class="form-group">
                <label for="hotel_location">Hotel Location</label>
                <input type="text" class="form-control" name="hotel_location" placeholder="E.g - New Delhi" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" placeholder="E.g - Single,Couples,Friends" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </body>
</html>
<?php
include("footer.php");
?>