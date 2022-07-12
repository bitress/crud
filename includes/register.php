<?php

    include_once 'connection.php';

    if (isset($_POST['action'])){

        try {

            $first_name = $con->real_escape_string($_POST['first_name']);
            $last_name = $con->real_escape_string($_POST['last_name']);
            $username = $con->real_escape_string($_POST['username']);
            $email = $con->real_escape_string($_POST['email']);
            $address = $con->real_escape_string($_POST['address']);
            $password = $con->real_escape_string($_POST['password']);

            $sql = "INSERT INTO users (first_name, last_name, username, password, email, address) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ssssss", $first_name, $last_name, $username, $password, $email, $address);

            if ($stmt->execute()){
                echo "true";
            }

        }catch (Exception $e){
            echo "Error: ". $e->getMessage();
        }

    }