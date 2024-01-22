<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// check if user is logged in

if (!isset($_SESSION['username'])) {
    header("Location: /login/login.php");
}

$_SESSION['errors'];
$_SESSION['success'];
$_SESSION['username'];
