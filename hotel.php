<?php

$id = $_GET["id"];
include("header.php");
include("connection.php");
$sql = "SELECT * FROM hoteltable WHERE id = '".($id)."' ";
$result = mysqli_query($conn,$sql);
$id =  $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        
        #view {
          
            border: 1px solid #4a4640;
            background-color: rgba(0, 0, 0, 0.6);
            padding : 50px;
        
        }

    </style>
   
 <?php

    $row =  mysqli_fetch_assoc($result);
        foreach ($result as $row){
            echo ' <div class="jumbotron">
        <div class=" col-md-6 d-flex text-grey flex-wrap container">
           <div class="card text-white bg-dark" id="view">
             <div class="card-body">
               <h1 class="card-title text-center">'.$row["hotel"].'</h1>
               <p class="card-text text-center"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>  '.$row["location"].'</p>
               <br><br>
               <div class="d-flex flex-column">
               <p><i class="fas fa-map-marked-alt"></i> '.$row["address"].'</p>
               <p><i class="fas fa-phone-volume"></i> '.$row["phone"].'</p>
               </div>
               <h3 style="float: right; color: green;">Rs.'.$row["price"].'</h3>
             </div>
           </div>
        </div>
     </div> ' ;
        };
    
    ?>
</body>

</html>

<?php
include("footer.php");
?>
