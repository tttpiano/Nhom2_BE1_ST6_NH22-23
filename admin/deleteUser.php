<?php
include "./config.php";
require "./models/db.php";
require "./models/users.php";
$user = new User;
if (isset($_GET['iduser'])) {
    $delete = $user->deleteUser($_GET['iduser']);
    header('location:users.php');
}
