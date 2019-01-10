<?php

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert the data into database</title>

</head>

<body>
<?php
    include_once("connection.php");
    $file = file_get_contents("data.json");
    $json = json_decode($file, TRUE);

    foreach($json as $row){

        $sql = "INSERT INTO hoteltable (hotel, phone, location, address, price) VALUE (".$row['name'].",".$row['phone'].",".$row{"location"}.",".$row["address"].",".$row["price"].")";

    }
    
    echo("data saved")
?>
</body>

</html>
