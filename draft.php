<?php
//  $id = $_GET['id'];
include("header.php");
include("connection.php");
$sql = "SELECT * FROM draft";
$fetch = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($fetch);


if(isset($_POST['confirm'])){
     foreach($fetch as $row){
    echo $row["hotel"] ; 
    $hotel =  $row["hotel"] ; 
    }
    $book_name = $row['book_name'];
    $book_add = $row['book_add'];
    $room = $row['room'];
    $payment = $row['payment'];
    $sql ="INSERT INTO booking (hotel, book_name, book_add, room, payment) VALUE ('$hotel', '$book_name', '$book_add', '$room', '$payment')";
    $result = mysqli_query($conn, $sql);
    $sql ="DELETE FROM draft WHERE book_id='$row[book_id]' ";
    $result = mysqli_query($conn, $sql);
    
} 
if(isset($_POST['delete'])){
    $book_id = $row['book_id'];
    $sql ="DELETE FROM draft WHERE book_id='$row[book_id]' ";
    $result = mysqli_query($conn,$sql);
} 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Draft</title>
</head>

<body>
    <style>
        .table {
            border: 1px black solid;
            margin: 30px;
        }

    </style>

    <table class="table table-bordered  align-item-center d-flex flex-wrap">
        <tr>
            <th>HOTEL NAME</th>
            <th>BOOK NAME</th>
            <th>BOOK ADD</th>
            <th>ROOM</th>
            <th>PAYMENT</th>
            <th>ACTIONS</th>
        </tr>
        <form action="<?php $PHP_SELF ?>" method="post">
            <?php
  foreach ($fetch as $row) { 
    echo '<tr>
         <td>'.$row["book_id"].'</td>
         <td>'.$row["hotel"].'</td>
         <td>'.$row["book_name"].'</td>
         <td>'.$row["book_add"].'</td>
         <td>'.$row["room"].'</td>
         <td>'.$row["payment"].'</td> 
    <td><button type="submit" name="confirm" class="btn btn-success">CONFIRM</button>
    <button type="submit" name="edit" class="btn btn-warning">EDIT</button>
    <button type="submit" name="delete" class="btn btn-danger">CANCEL</button></td> </tr>';
  }
  ?>
        </form>
    </table>
</body>

</html>
<?php
include("footer.php");
?>
