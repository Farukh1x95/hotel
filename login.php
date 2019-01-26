<?php 
include("connection.php");
include("header.php");

if (isset($_COOKIE['$username'])){
header("location: INDEX.php");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <style>
        .setting{
            margin: 10px;
            border: 1px solid black;
            border-radius: 8px;
            padding: 20px;
            text-align-last: center;
            align-items: center;
            
        }
        .button-set{
            margin: 10px;
            padding: 20px;
            text-align-last: center;
            align-items: center;
        }
        #usr{
           
        }
    </style>
    <div class="jumbotron">
        <div class="container col-md-4" id="usr">

            <div class=" setting text-center">
                <form name="UserAuth" action="validation.php" method="post" onsubmit="return Form()">
                    <div class="form-group ">
                        <label for="#"><b>Username</b></label>
                        <input type="text" class="form-control" name="username" id="inputName" placeholder="E.g. - Farukh" required>
                        <p id="hint1"></p>
                    </div>
                    <div class="form-group">
                        <label for="#"><b>Password</b></label>
                        <input type="text" class="form-control" name="password" id="Pswd" placeholder="Password" required>
                    </div>
                    <button name="login" class="btn btn-primary">Login</button>
                </form>

            </div>
            <div class="button-set text-center">

                <a style="color:white;" href="add-user.php"><button class="btn btn-primary">Sign Up</button></a>
            </div>
        </div>
    </div>
    <script>
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

    </script>
</body>

</html>

<?php
include("footer.php"); 
?>
