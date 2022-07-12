<?php

include_once '../includes/connection.php';


if(isset($_SESSION['adminLoggedIn'])){
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
    <link rel="stylesheet" type="text/css" href="../assets/css/my-login.css">
</head>

<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">

                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Login</h4>
                        <form>
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
                    </div>
                </div>
                <div class="footer">
                    Copyright &copy; 2022 &mdash; Your Company
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script>

    $(function () {

        $("#login").on("click", function () {

            let username = $("#username").val();
            let password = $("#password").val();

            if (username.trim() === "") {
                alert("Please enter your username");
                return;
            }

            if (password.trim() === "") {
                alert("Please enter your password");
                return;
            }
            $.ajax({
                url: 'actions/login.php',
                type: 'post',
                data: {
                    action: 'login', // dont mind this, just for the server side
                    username: username,
                    password: password
                },
                success: function (res) {
                    if (res == "true") {
                        alert("Logged in");
                        setTimeout(function () {
                            window.location.href = 'index.php';
                        }, 2000);
                    } else {
                        alert(res);
                    }
                }
            })
        });

    });

</script>
</body>
</html>

