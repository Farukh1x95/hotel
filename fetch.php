<?php
include("Connection.php");

$sql = "SELECT * FROM hoteltable";
$result = mysqli_query($conn,$sql);


//while ($row = mysqli_fetch_assoc($result)) {
//      echo "HOTEL :{$row['hotel']} <br> ".
//          "PHONE :{$row['phone']} <br> ".
//         "HOTEL LOCATION : {$row['location']} <br> ".
//         "HOTEL ADDRESS : {$row['address']} <br> ".
//         "HOTEL PRICE : {$row['price']} <br> ".
//         "--------------------------------<br>";
//   }



?>
