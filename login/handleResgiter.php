<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/users.php";
$user = new User;
if (isset($_POST['dangky'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordHash = md5($password);
    $user->insertResgiter($username, $passwordHash, 2);
    header('location:login.php');
}
