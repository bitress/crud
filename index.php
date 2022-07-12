<?php


include_once 'includes/connection.php';

if(isset($_SESSION['isLoggedIn'])){

    $id = $con->real_escape_string($_SESSION['id']);

    $sql = "SELECT * FROM users WHERE id= ?"; // SQL with parameters
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    $user = $result->fetch_assoc(); // fetch data

} else {
    header("Location: login.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>

    <div class="jumbotron">
        <h3>Hello <?= $user['first_name'] ?></h3>
        <a href="logout.php">Log out</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Edit Profile</h3>
                <form>
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" value="<?= $user['first_name'] ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="first_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" value="<?= $user['last_name'] ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?= $user['username'] ?>" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="email" name="email" id="email" value="<?= $user['email'] ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="username">Address</label>
                        <input type="text" name="address" id="address" value="<?= $user['address'] ?>" class="form-control">
                    </div>

                    <div class="form-group">
                      <button type="button" id="edit_profile" class="btn btn-success btn-block">Edit Profile</button>
                          </div>

                </form>
            </div>

            <div class="col-md-6">
                <h3>Change Password</h3>

                <form>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" name="new_password" id="new_password" placeholder="Enter your new password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Repeat Password</label>
                        <input type="password" name="repeat_password" id="repeat_password" placeholder="Repeat your new password" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="button" id="change_pass" class="btn btn-success btn-block">Change Password</button>
                    </div>

                </form>

            </div>

        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>

