<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOTELS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
    <style>
        body * {
            font-family: 'Open Sans', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .jumbotron {
            margin-bottom: 0px;
        }

        header {
            margin-bottom: 50px;
        }

    </style>
    <header>
        <div class="navbar navbar-dark navbar-nav bg-dark fixed-top">

            <div class="container d-flex flex-row text-light  justify-content-between">
                <div class="pg-2 d-flex justify-content-start">
                    <a href="INDEX.php" class="btn btn-dark">
                        <h1><i class="fas fa-h-square"></i>OTELS</h1>
                    </a>
                </div>

                <div class="pg-2  justify-content-end ">
                    <a name="" id="" class="btn btn-dark" href="INDEX.php" role="button"><i class="fas fa-home"></i> </a>
                    <?php
                    $draftno = "Select COUNT(book_id) as total FROM draft";
                    $result = mysqli_query($conn, $draftno);
                     session_start();
                    if(isset($_SESSION['username'])){
                      echo  '<a href="draft.php" class="btn btn-dark"><i class="fas fa-box-open"></i> draft</a> ' ; ('.$result.');
                        echo '<a href="showbooking.php" class="btn btn-dark"><i class="fas fa-box-open"></i> Booking</a>';
                    }
                    ?>
                    <a href="login.php" name="" id="" class="btn btn-dark" role="button"><i class="far fa-user"></i>
                        <?php 
                        if(isset($_SESSION['username'])){ 
                            echo $_SESSION['username'] ; }
                        ?> </a>
                    <?php
                    if(isset($_SESSION['username'])){
                    echo '<a href="logout.php" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>' ;
                    }

                    ?>
                </div>
            </div>
        </div>
    </header>
</body>

</html>
