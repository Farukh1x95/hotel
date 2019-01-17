<?php
include("header.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <style>

    </style>
    <div class="container" style="padding: 10px; border: 1px solid #242424; border-radius: 8px; margin-top: 50px">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="jumbotron">
                <form name="UserAuth" onsubmit="return Form()" action="validation.php" method="post">
                    <div class="form=group">
                        <label for="inputName"><strong>Username</strong></label>
                        <input type="text" class="form-control col-sm-4 is-valid" name="username" id="inputName" placeholder="E.g. - Farukh">
                        <div class="hint1"></div> <br>
                    </div>

                    <div class="form-group">
                        <label for=""><Strong>Password</Strong></label>
                        <input type="password" class="form-control col-sm-4" name="password" id="Pswd" placeholder="*******">
                        <div class="hint2"></div> <br>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Log In </button>

                    <a href="newuser.php"><button type="button" name="login" class="btn btn-primary">Sign Up</button></a>
                </form>
            </div>
        </div>
        <div class="col-lg-4"></div>
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
