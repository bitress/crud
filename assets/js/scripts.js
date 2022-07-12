$(function (){

    $("#login").on("click", function (){

        let username = $("#username").val();
        let password = $("#password").val();

        if (username.trim() === ""){
            alert("Please enter your username");
            return;
        }

        if (password.trim() === ""){
            alert("Please enter your password");
            return;
        }
        $.ajax({
            url: 'includes/login.php',
            type: 'post',
            data: {
                action: 'login', // dont mind this, just for the server side
                username: username,
                password: password
            },
            success: function (res){
                if (res == "true"){
                    alert("Logged in");
                    setTimeout(function(){
                        window.location.href = 'index.php';
                    }, 2000);
                } else {
                    alert(res);
                }
            }
        })
    });

    $("#register").on("click", function (){


        let first_name = $("#first_name").val();
        let last_name = $("#last_name").val();
        let username = $("#username").val();
        let password = $("#password").val();
        let email = $("#email").val();
        let address = $("#address").val();

        $.ajax({
            url: 'includes/register.php',
            type: 'post',
            data: {
                action: 'register',
                first_name: first_name,
                last_name: last_name,
                username: username,
                password: password,
                email: email,
                address: address
            },
            success: function (res){

                if (res == 'true'){
                    alert('Register successfully');
                    setTimeout(function(){
                        window.location.href = 'login.php';
                    }, 2000);

                }

            }
        })


    });


    $('#edit_profile').on("click", function (){


        let first_name = $("#first_name").val();
        let last_name = $("#last_name").val();
        let username = $("#username").val();
        let password = $("#password").val();
        let email = $("#email").val();
        let address = $("#address").val();

        $.ajax({
            url: 'includes/edit-profile.php',
            type: 'post',
            data: {
                action: 'editProfile',
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

    $("#change_pass").on("click", function (e){

        let new_password = $("#new_password").val();
        let confirm_password = $("#repeat_password").val();


        if (new_password.trim() != confirm_password.trim()){
            alert("Password dont match");
            return;
        }


        $.ajax({
            url: 'includes/change_password.php',
            type: 'post',
            data: {
                action: 'changePassword',
                new_password: new_password,
                confirm_password: confirm_password
            }, success: function (res){

                if (res == 'true'){
                    alert("Password changed successfully");
                    $("#new_password").val('');
                    $("#repeat_password").val('');
                }

            }
        });

    })

});