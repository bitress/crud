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
    <title>Register Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
</head>

<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="login-form">
                <h3>Register</h3>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="first_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="" class="form-control">
                </div>


                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="email" name="email" id="email" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="username">Address</label>
                    <input type="text" name="address" id="address" value="" class="form-control">
                </div>


                <div class="form-group">
                    <label for="password">Password
                    </label>
                    <input id="password" type="password" class="form-control" name="password" required data-eye>
                </div>

                <div class="form-group m-0">
                    <button type="button" id="register" class="btn btn-primary btn-block">
                        Register
                    </button>
                </div>
                <p class="text-center"><a href="login.php">Have an account</a></p>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>

