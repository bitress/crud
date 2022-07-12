<?php

include_once '../../includes/connection.php';


if (isset($_POST['action'])){

    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string($_POST['password']);

    try {

        $sql = "SELECT * FROM `auth_user` WHERE `username` = ?";

        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $username);
        if ($stmt->execute()){
            $result = $stmt->get_result();

            $count = $result->num_rows;

            if ($count > 0){


                $row = $result->fetch_assoc();

                if ($row['password'] == $password) {

                    $_SESSION['adminLoggedIn'] = true;
                    $_SESSION['admin_id'] = $row['id'];

                    echo 'true';

                } else {

                    echo "Incorrect password";
                }

            } else {

                echo "No user found";

            }

        } else {

            echo "Something went wrong with the connection";

        }



    } catch (Exception $e){
        echo "Error: " . $e->getMessage();
    }


}