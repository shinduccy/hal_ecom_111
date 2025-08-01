<?php

if(isset($_POST['btnlogin'])) //login request
{
$email=$_POST['email']; //name attribute value of form control
$password=$_POST['password'];
$hashcode ="$2y$10$11YL43uL3QKpDm7iv8gbbOZSgPmRPByRRQg6jXjrzqH3ug99QsExS";
if(password_verify(password: $password, $hashcode)) // plane text + hashcode
{
    echo "login success";
}
else{
    echo "Login fail";
}
echo "$email and $password";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <?php
            require_once "nagivation.php";
            ?>

        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="login.php" class="form mt-3" method="post">
                    <fieldset>
                        <legend>Admin Login</legend>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="passowrd" class="form control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2" name="btnlogin">Login</button>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>

</body>

</html>