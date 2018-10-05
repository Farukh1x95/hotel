<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoteldb";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo("Connection success...");
}

$hotelname = $_POST['hotelname'];
$location = $_POST['location'];
$choose = $_POST['choose'];

$sql = "INSERT INTO index (hotel_name,hotel_location,for) VALUES ('$hotelname','$location', '$choose')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Data sending...</title>
</head>
<button><a href="index.html"></a></button>
<body>
</body>
</html>
