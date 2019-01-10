<?php

    function conn(){
        $u = 'root';
        $p = '';
        $d = 'hotels';

        $GLOBALS['con'] = new mysqli('localhost', $u, $p,$d )
            or die('Connection Failed. '.$con->error);
    }
$mysqli = new mysqli("localhost", "root", "", "hotels");
$result = $mysqli->query("SELECT * FROM hoteltable");
$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BOOKING RECORD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>

<body>
    <?php require_once 'Connection.php'; ?>
    <style>
        body {
            background-image: url("bg.jpg");
        }

        h3 {
            text-align: center;
            margin: 10px;
            margin-bottom: 40px;
        }

    </style>
    <div class="container">
        <h3>Booking Records</h3>
        <table class=" table table-bordered">
            <tr class="thead-dark">
                <th>Hotel ID</th>
                <th>User ID</th>
                <th>Date</th>
                <th>Rooms</th>
                <th>Days</th>
                <th>Booking Date</th>
            </tr>
            <tr>
        <?php
			foreach($result as $row)
			{
				echo '<tr><td>'.$row["hotel"].' </td> ';
				echo '<td>'.$row["hotel"].'</td>';
				echo '<td>'.$row["phone"].'</td>';
				echo '<td>'.$row["location"].'</td>';
				echo '<td>'.$row["address"].'</td>';
				echo '<td>'.$row["price"].'</td></tr>';
			}		
        ?>
            </tr>
        </table>
    </div>
</body>

</html>
