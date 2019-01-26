<?php
include("header.php");
include("connection.php");
if(isset($_POST["submit"])){
    $hotel = $_POST["hotel"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $address = $_POST["address"];
    $price = $_POST["price"];
    $sql ="INSERT INTO hoteltable (hotel, phone, location, address, price) VALUE ('$hotel', '$phone', '$location', '$address', '$price')";
    $result = mysqli_query($conn,$sql);
    if(!$result) 
    { die('Error : Query Not Executed. Please Fix the Issue! ' . mysql_error()); } else 
    { header("INDEX.php"); }
}
    
?>

<html>

<body>
    <style>
        .form{
        margin: 50px; 
      }
  </style>
    <div class="form">
        <div class="container">
            <h2>Add New Hotel</h2>
            <form action="form.php" method="POST">
                <div class="form-group">
                    <label for="hotel_name">Hotel Name</label>
                    <input type="text" class="form-control" name="hotel" placeholder="Hotel Name" required>
                </div>
                <div class="form-group">
                    <label for="hotel_location">Hotel Location</label>
                    <input type="text" class="form-control" name="phone" placeholder="E.g - New Delhi" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="location" placeholder="E.g - Single,Couples,Friends" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="address" placeholder="E.g - Single,Couples,Friends" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" placeholder="E.g - Single,Couples,Friends" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
<?php
include("footer.php");
?>
