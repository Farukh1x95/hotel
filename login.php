<?php
include("header.php"); 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <style>

    </style>
    <div class="jumbotron">
        <div class="container">
            <form name="UserAuth" action="validation.php" method="post" onsubmit="return Form()">
                <div class="form-group col-md-6">
                    <label for="#">Username</label>
                    <input type="username" class="form-control" id="inputName" placeholder="E.g. - Farukh">
                    <p id="hint1"></p>
                </div>
                <div class="form-group col-md-6">
                    <label for="#">Password</label>
                    <input type="password" class="form-control" id="Pswd" placeholder="Password">
                </div>
                <button type="submit" name="login" class="btn btn-primary">Login</button>
                <button class="btn btn-primary"><a style="color:white;" href="add-hotel.php">Sign Up</a></button>
            </form>
        </div>
    </div>
    <!--    <script>
        function Form() {

            var inputName = document.forms["UserAuth"]["inputName"].value;
            if (inputName === "") {
                document.getElementById("hint1").innerHTML = "invalid username!";
                document.getElementById("hint1").CSS({
                    "color: red;"
                });
                return false;
            }

            var Pswd = document.forms["UserAuth"]["Pswd"].value;
            if (Pswd === "") {
                document.getElementById("hint2").innerHTML = "invalid Password!";
                document.getElementById("hint2").CSS({
                    "color: red;"
                });
                return false;
            }

        }

    </script> -->
</body>

</html>

<?php
include("footer.php"); 
?>
