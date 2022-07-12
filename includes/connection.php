<?php

session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "crud";


$con = new mysqli($host, $user, $password, $database);

// Check connection
if($con === false){
    die("ERROR: Could not connect. " . $con->connect_error);
}
