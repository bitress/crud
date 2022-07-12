<?php


include_once '../includes/connection.php';

if(!isset($_SESSION['adminLoggedIn'])){
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
    <h3>Hello Admin</h3>
    <a href="logout.php">Log out</a>
</div>

<div class="container">
    <div class="row">

        <button type="button" class="btn btn-success mb-2"  data-toggle="modal" data-target="#addUser">Add</button>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php

                $sql = "SELECT * FROM users ORDER BY id ASC";
                $stmt = $con->prepare($sql);
                $stmt->execute();
                $res = $stmt->get_result();

                while  ($row = $res->fetch_assoc()):

                ?>
            <tr>
                <th scope="row"><?= $row['id'] ?></th>
                <td><?= $row['first_name'] ?></td>
                <td><?= $row['last_name'] ?></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['password'] ?></td>
                <td> <div class="btn-group">
                        <button type="button" data-edit="<?= $row['id'] ?>" class="btn btn-primary edit">Edit</button>
                        <button type="button" data-delete="<?= $row['id']; ?>" class="delete btn btn-danger">Delete</button>
                    </div> </td>
            </tr>

            <?php endwhile; ?>

            </tbody>
        </table>

    </div>
</div>


<!-- add user Modal -->
<div class="modal" id="addUser">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>

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
                        <button type="button" id="add_user" class="btn btn-primary btn-block">
                            Add
                        </button>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- add user Modal -->
<div class="modal" id="editUser">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form>

                    <input type="hidden" id="edit_id" value="">

                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="edit_first_name" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="first_name">Last Name</label>
                        <input type="text" name="last_name" id="edit_last_name" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="edit_username" value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="email" name="email" id="edit_email" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="username">Address</label>
                        <input type="text" name="address" id="edit_address" value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="password">Password
                        </label>
                        <input id="edit_password" type="password" class="form-control" name="password" required data-eye>
                    </div>

                    <div class="form-group m-0">
                        <button type="button" id="edit_user" class="btn btn-primary btn-block">
                            Edit
                        </button>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).on("click", ".delete", function() {

        var id = $(this).data("delete");

       if (confirm("Are you sure you want to delete?")){

           $.ajax({
               url: 'actions/delete-user.php',
               type: 'post',
               data: {
                   action: 'deleteUser',
                   id: id

               },
               success: function (res){
                   if (res == 'true'){
                       alert("Deleted successfully");
                       location.reload();
                   }
               }
           })

       }

    });

    $('#edit_user').on("click", function (){

        let id = $("#edit_id").val();
        let first_name = $("#edit_first_name").val();
        let last_name = $("#edit_last_name").val();
        let username = $("#edit_username").val();
        let password = $("#edit_password").val();
        let email = $("#edit_email").val();
        let address = $("#edit_address").val();

        $.ajax({
            url: 'actions/edit-user.php',
            type: 'post',
            data: {
                action: 'editProfile',
                id: id,
                first_name: first_name,
                last_name: last_name,
                username: username,
                password: password,
                email: email,
                address: address
            },
            success: function (res){

                if (res == 'true'){
                    alert('Edit success');
                    setTimeout(function(){
                        location.reload()
                    }, 2000);

                }

            }
        })

    });

    $(document).on("click", ".edit", function() {
        var id = $(this).data("edit");

        $.ajax({
            url: 'actions/fetch-user.php',
            type: 'post',
            data: {
                action: 'fetch',
                id: id
            },
            dataType: 'json',
            success: function (res){
                $("#editUser").modal('show');
                $("#edit_first_name").val(res.first_name);
                $("#edit_id").val(res.id);
                $("#edit_last_name").val(res.last_name);
                 $("#edit_username").val(res.username);
                $("#edit_password").val(res.password);
                 $("#edit_email").val(res.email);
                $("#edit_address").val(res.address);
            }
        })


    });

    $("#add_user").on("click", function (){


        let first_name = $("#first_name").val();
        let last_name = $("#last_name").val();
        let username = $("#username").val();
        let password = $("#password").val();
        let email = $("#email").val();
        let address = $("#address").val();

        $.ajax({
            url: 'actions/add-user.php',
            type: 'post',
            data: {
                action: 'adduser',
                first_name: first_name,
                last_name: last_name,
                username: username,
                password: password,
                email: email,
                address: address
            },
            success: function (res){

                if (res == 'true'){
                    alert('Added successfully');
                    setTimeout(function(){
                       location.reload();
                    }, 2000);

                }

            }
        })


    });


</script>
</body>
</html>

