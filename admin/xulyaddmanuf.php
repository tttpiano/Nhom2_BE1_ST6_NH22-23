<?php
include "./config.php";
require "./models/db.php";
require "./models/manufacture.php";
$manufacture = new Manufacture;
$tenHang = $_POST['tenHang'];
$insertManufacture = $manufacture->insertManufacture($tenHang);
header('location:manufactus.php');
