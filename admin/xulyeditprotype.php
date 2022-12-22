<?php
session_start();
include "./config.php";
require "./models/db.php";
require "./models/protype.php";
$protype = new Protype;
$tenLoai = $_POST['tenLoai'];
if (isset($_SESSION['editProtype'])) {
    $editProtype = $protype->editProtype($tenLoai, $_SESSION['editProtype']);
}
header('location:protype.php');
