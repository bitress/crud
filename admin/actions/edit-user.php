<?php

include_once '../../includes/connection.php';

 if (isset($_POST['action'])){

        try {
            $id = $con->real_escape_string($_POST['id']);
            $first_name = $con->real_escape_string($_POST['first_name']);
            $last_name = $con->real_escape_string($_POST['last_name']);
            $username = $con->real_escape_string($_POST['username']);
            $email = $con->real_escape_string($_POST['email']);
            $address = $con->real_escape_string($_POST['address']);

            $sql = "UPDATE users SET first_name = ?, last_name = ?, username = ?, email = ?, address = ? WHERE id = ?";
            $stmt =  $con->prepare($sql);
            $stmt->bind_param("sssssi", $first_name, $last_name, $username, $email, $address, $id);
            if ($stmt->execute()){
                echo "true";
            }

        } catch (Exception $e){

            echo "Error: ". $e->getMessage();

        }



    }
