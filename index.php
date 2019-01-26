<?php   
include("header.php");
include("connection.php");
$sql = "SELECT * FROM hoteltable";
$result = mysqli_query($conn,$sql);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <style>
        #card {
            margin: 10px;
            padding: 20px;
        }

        a {
            text-decoration: none;
        }

    </style>
    <div class="jumbotron d-inline-flex flex-wrap" id="main">
        <?php 
        $sql = "SELECT * FROM hoteltable";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
foreach($result as $row){   
    echo  '<div class="col-md-4" >    
                  <div class="card bg-dark" id="card">
                    <div class="card-body justify-content-center text-center">
                        <h3 class="card-title">
                               <a href="hotel.php?id='.$row["id"].'">'.$row["hotel"].' </a>
                        </h3>
                        <p class="card-text text-light"><i class="fas fa-map-marker-alt"></i>  '.$row["location"].'</p>
                    </div>
                </div>
        </div>' ;
};
?>
    </div>
</body>

</html>
<?php
include("footer.php");
?>
