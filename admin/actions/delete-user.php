<?php

include_once '../../includes/connection.php';

if (isset($_POST['action'])){

    try {


        $id = $con->real_escape_string($_POST['id']);


        $sql = "DELETE FROM users WHERE id = ?";
        $stmt =  $con->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()){
            echo "true";
        }

    } catch (Exception $e){

        echo "Error: ". $e->getMessage();

    }



}
