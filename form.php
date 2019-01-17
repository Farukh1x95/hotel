    <?php
    include_once("connection.php");
    
    $hotel = $_POST["hotel"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $address = $_POST["address"];
    $price = $_POST["price"];
    
    $sql ="INSERT INTO hoteltable (hotel, phone, location, address, price) VALUE ('$hotel', '$phone', '$location', '$address', '$price')";
    $result = mysqli_query($conn,$sql);
    if(!$result) 
    { die('Error : Query Not Executed. Please Fix the Issue! ' . mysql_error()); } else 
    { echo "Data Inserted Successully!!!"; }

?>
