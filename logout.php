<?php

session_start();

    unset($_SESSION['isLoggedIn']);
    unset($_SESSION['id']);

    header("Location: login.php");