<?php

session_start();

unset($_SESSION['adminLoggedIn']);
unset($_SESSION['admin_id']);

header("Location: login.php");