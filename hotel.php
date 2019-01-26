<?php
$id = $_GET['id'];
include("header.php");
include("connection.php");
$sql = "SELECT * FROM hoteltable WHERE id='$id' ";
$result = mysqli_query($conn,$sql);
//echo $id;
?>
<html>

<body>
    <style>
        #view {
            border: 1px solid #4a4640;
            /*background-color: rgba(0, 0, 0, 0.6); */
            margin-bottom: 30px;
        }

        #recommend {
            margin-bottom: 10px;
        }

    </style>
    <div class="jumbotron">
        <div class="container  d-flex flex-row">
            <?php
    $row =  mysqli_fetch_assoc($result);
        foreach ($result as $row){
            echo '<div class="container col-md-8" style="margin-bottom: 0px;">
        <div class=" d-flex justify-content-center text-grey flex-wrap container">
           <div class="card text-white bg-dark">
           <img src="'.$row["img"].'" class="card-img-top"  alt="image">
             <div class="card-body">
               <h1 class="card-title text-center">'.$row["hotel"].'</h1>
               <p class="card-text text-center"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>  '.$row["location"].'</p>
               <br><br>
               <div class="d-flex flex-column">
               <p><i class="fas fa-map-marked-alt"></i> '.$row["address"].'</p>
               <p><i class="fas fa-phone-volume"></i> '.$row["phone"].'</p>
               </div>
               <h3 style="float: right; color: green;">Rs.'.$row["price"].'</h3>
               <a href="booking.php?id='.$row["id"].'"><button class="btn btn-success">BOOK NOW</button></a>
            </div>  
        </div>
    </div>
</div>';
  };
?>

            <div class="container">
                <?php
$query = "SELECT * FROM hoteltable WHERE location='$row[location]' ";
$fetch = mysqli_query($conn,$query);
        $data =  mysqli_fetch_row($fetch);
        foreach ($fetch as $data){
echo ' <div class="container d-flex-inline col" id="recommend">   
<div class="card bg-dark" id="card">
                    <div class="card-body justify-content-end text-center">
                        <h3 class="card-title">
                            <a href="hotel.php?id='.$data["id"].'">'.$data["hotel"].' </a>
                        </h3>
                        <p class="card-text text-light"><i class="fas fa-map-marker-alt"></i> '.$data["location"].'</p>
                    </div>
                </div>
            </div>' ;
        }
?>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include("footer.php");
?>
