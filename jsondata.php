<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD HOTEL DATA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <style>
        table {
            border: 1px black solid;

        }

    </style>
    <table class="table table-bordered">
        <tr>
            <th>HOTEL</th>
            <th>phone</th>
            <th>location</th>
            <th>address</th>
            <th>price</th>
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
         <td>'.$row["price"].'</td> <br>  

    </tr>';
  }
  ?>
    </table>
    

     class Bookings extends Models{
    protected $tableName = "bookings";

    public function insertData(){
    con();
    $sql = $GLOBALS['con']->prepare("INSERT INTO ".$this->tableName." VALUES (NULL, ?, ? ,?, ?, ?, ?) ");
    $sql->bind_param('siiiis', $date, $hotel_id, $user_id, $total_rooms, $days, $booking_date)
    or die('Binding Failed. '.$GLOBALS['con']->error);

    $date = $_POST['date'];
    $hotel_id = $_SESSION['hotel_id'];
    $user_id = $_COOKIE['id'];
    $total_rooms = $_POST['total_rooms'];
    $days = $_POST['nights'];
    date_default_timezone_set('Asia/Kolkata');
    $booking_date = date('y-m-d h:i:s');

    $sql->execute()
    or die('Execution Failed. '.$GLOBALS['con']->error);
    $sql->close();
    $GLOBALS['con']->close();
    }
    }




</body>

</html>
