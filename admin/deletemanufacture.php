<?php
include "./config.php";
require "./models/db.php";
require "./models/manufacture.php";
$manufacture = new Manufacture;
if (isset($_GET['maHang'])) {
    $delete = $manufacture->deleteManufacture($_GET['maHang']);
    header('location:manufactus.php');
}
