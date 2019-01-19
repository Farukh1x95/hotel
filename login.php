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
        .setting{
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            border: 1px solid black;
            border-radius: 8px;
            padding: 20px;
            
        }
        .button-set{
            align-items: center;
        }
    </style>
    <div class="jumbotron">
        <div class="container">
            <form name="UserAuth" action="validation.php" method="post" onsubmit="return Form()">
                <div class="setting text-center">
                    <div class="form-group col-md-6">
                        <label for="#">Username</label>
                        <input type="text" class="form-control" name="username" id="inputName" placeholder="E.g. - Farukh">
                        <p id="hint1"></p>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="#">Password</label>
                        <input type="text" class="form-control" name="password" id="Pswd" placeholder="Password">
                    </div>
                    <div class="button-set">
                        <button name="login" class="btn btn-primary">Login</button>
                        <button class="btn btn-primary"><a style="color:white;" href="add-user.php">Sign Up</a></button>
                    </div>
                </div>
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
