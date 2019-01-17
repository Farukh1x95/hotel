<?php
include("header.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD HOTEL DATA</title>
</head>

<body>
    <style>
        .table {
            border: 1px black solid;
            margin: 30px;
        }

    </style>

    <table class="table table-dark table-bordered  align-item-center d-flex flex-wrap">
        <tr>
            <th>HOTEL</th>
            <th>PHONE</th>
            <th>LOCATION</th>
            <th>ADDRESS</th>
            <th>PRICE</th>
        </tr>
        <?php
  $json = file_get_contents("data.json");
  $data = json_decode($json,true);
  foreach ($data as $row) {
        
    echo '<tr>
         <td>'.$row["name"].'</td>
         <td>'.$row["phone"].'</td>
         <td>'.$row["location"].'</td>
         <td>'.$row["address"].'</td>
         <td>'.$row["price"].'</td>   
         </tr>
      ' ;
  };
  ?>
    </table>
</body>

</html>
<?php
include("footer.php");
?>
