<?php

include_once 'connection.php';

if (isset($_POST['action'])){

    try{


        $id = $con->real_escape_string($_SESSION['id']);
        $confirm_password = $con->real_escape_string($_POST['confirm_password']);

        $sql = "UPDATE users SET password = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("si", $confirm_password, $id);
        if ($stmt->execute()){
            echo "true";
        }



    } catch (Exception $e){
        echo "Error: " . $e->getMessage();
    }

}