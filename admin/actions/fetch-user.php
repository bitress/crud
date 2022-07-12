<?php
include_once '../../includes/connection.php';

        if (isset($_POST['action'])){

            try {

                $id = $con->real_escape_string($_POST['id']);


                $sql = "SELECT * FROM `users` WHERE `id` = ?";

                $stmt = $con->prepare($sql);
                $stmt->bind_param("i", $id);
                if ($stmt->execute()) {
                    $result = $stmt->get_result();
                    echo json_encode($result->fetch_assoc());
                }

            } catch (Exception $e) {

            }
        }

