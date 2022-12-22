<?php
session_start();
include "./config.php";
require "./models/db.php";
require "./models/manufacture.php";
$manufacture = new Manufacture;
$tenHang = $_POST['tenHang'];
if (isset($_SESSION['editmanu'])) {
    $editProtype = $manufacture->editManufacture($tenHang, $_SESSION['editmanu']);
}
header('location:manufactus.php');