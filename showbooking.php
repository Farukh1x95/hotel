<?php
$null_user = $_COOKIE['$username'];
if(is_null($null_user)){
    header("location: login.php");
}
include("header.php");
include("connection.php");
$sql = "SELECT * FROM booking";
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
            /*padding: px;*/
        }

        a {
            text-decoration: none;
        }

    </style>
    <div class="jumbotron d-flex">
        <div class="container d-inline-flex flex-wrap" id="main">
            <div></div>
            <?php      
$row = mysqli_fetch_assoc($result);
foreach($result as $row){   
    echo  '<div class="col-md-4">    
                  <div class="card bg-info text-white" id="card">
                    <div class="card-body justify-content-center">
                        <h2 class="card-title">
                        <i class="far fa-user-circle"></i>   Name: '.$row["book_name"].' 
                        </h2>
                         <div class="d-flex flex-column">
               <p><i class="fas fa-address-card"></i>  '.$row["book_add"].'</p>
               <p><i class="far fa-building"></i> No. of Rooms: '.$row["room"].'</p>
               <p><i class="fas fa-hotel"></i> Hotel : '.$row["hotel"].'</p>
               </div>
                        <h3 style="float: right; color: green;"><i class="far fa-money-bill-alt"></i> '.$row["payment"].'</h3>
                    </div>
                </div>
        </div>' ;
};
?>
        </div>
    </div>
</body>

</html>
<?php
include("footer.php");
?>
