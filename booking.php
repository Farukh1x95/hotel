<?php
$null_user = $_COOKIE['$username'];
if(is_null($null_user)){
    header("location: login.php");
}
$id = $_GET['id'];
include("header.php");
include("connection.php");
$sql = "SELECT * FROM hoteltable WHERE id='$id' ";
$fetch = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($fetch);  

if(isset($_POST['savedraft'])){
     foreach($fetch as $row){ 
    $hotel =  $row["hotel"] ; 
    }
    $book_name = $_POST['book_name'];
    $book_add = $_POST['book_add'];
    $room = $_POST['room'];
    $payment = $_POST['payment'];
    $sql ="INSERT INTO draft (hotel, book_name, book_add, room, payment) VALUE ('$hotel', '$book_name', '$book_add','$room', '$payment')";
    $result = mysqli_query($conn,$sql);
    
}
if(isset($_POST['book'])){
    foreach($fetch as $row){
    $hotel =  $row["hotel"] ; 
    }
    $book_name = $_POST['book_name'];
    $book_add = $_POST['book_add'];
    $room = $_POST['room'];
    $payment = $_POST['payment'];
    $sql ="INSERT INTO booking (hotel, book_name, book_add, room, payment) VALUE ('$hotel', '$book_name', '$book_add', '$room', '$payment')";
    $result = mysqli_query($conn,$sql);

}
?>
<html>

<body>
    <style>
        #view {

            border: 1px solid #4a4640;
            background-color: rgba(0, 0, 0, 0.6);
        }
        .setting{
            margin: 10px;
            border: 1px solid black;
            border-radius: 8px;
            padding: 20px;
            text-align-last: center;
            align-items: center;     
        }
        .button-set{
            align-items: center;
        }
    </style>
    <div class="jumbotron">
        <div class="container col-md-4" id="usr">
            <form name="UserAuth" action="<?php $PHP_SELF ?>" method="post" onsubmit="return Form()">
                <div class=" setting text-center">
                    <div class="form-group ">
                        <h1>
                            <?php 
                        foreach($fetch as $row){
                            echo $row["hotel"] ;
                        }
                        ?>
                        </h1>
                        <label for="inputName"><b>Your Name</b></label>
                        <input type="text" class="form-control" name="book_name" id="inputName" placeholder="E.g. - Farukh" required>
                        <p id="hint1"></p>
                    </div>
                    <div class="form-group">
                        <label for="#"><b>Your Address</b></label>
                        <input type="text" class="form-control" name="book_add" id="Pswd" placeholder="Your Address" required>
                    </div>
                    <div class="form-group">
                        <label for="room"><b>No. of Rooms</b></label>
                        <select class="form-control" name="room" id="room" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="radio-inline d-flex justify-content-around">
                        <label class="radio-inline">
                            <input type="radio" name="payment" value="CASH">CASH
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="payment" value="ONLINE" checked>ONLINE
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="payment" value="E-WALLET">E-WALLET
                        </label>
                    </div>
                    <div class=" ">
                        <button type="submit" name="savedraft" class="btn btn-warning"><a>Save Dratf <i class="fas fa-shopping-cart"></i></a></button>
                        <button type="sumbit" name="book" class="btn btn-success"><a style="color:white;">BOOK NOW <i class="far fa-check-circle"></i> </a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
include("footer.php");
?>
