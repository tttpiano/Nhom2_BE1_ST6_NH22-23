<?php session_start();
if (!isset($_SESSION['user'])) {
    header('location:./login.php');
}
header('location: http://localhost:82/Doan/');
