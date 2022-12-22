<?php
include "./config.php";
require "./models/db.php";
require "./models/users.php";
$user = new User;
$username = $_POST['username'];
$password = md5($_POST['password']);
$roles = isset($_POST['roles']) ? 1 : 2;
$insertResgiter = $user->insertResgiter($username, $password, $roles);
header('location:users.php');
