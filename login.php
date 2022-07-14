<?php

    include_once 'includes/connection.php';

    if (isset($_SESSION['isLoggedIn'])){
        header("Location: index.php");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
</head>

<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="login-form">
                <form action="/examples/actions/confirmation.php" method="post">
                    <h2 class="text-center">Log in</h2>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" name="username" value="" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password">Password
                        </label>
                        <input id="password" type="password" class="form-control" name="password" required data-eye>
                    </div>

                    <div class="form-group m-0">
                        <button type="button" id="login" class="btn btn-primary btn-block">
                            Login
                        </button>
                    </div>
                </form>
                <p class="text-center"><a href="register.php">Create an Account</a></p>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>

