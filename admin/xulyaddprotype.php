<?php
include "./config.php";
require "./models/db.php";
require "./models/protype.php";
$protype = new Protype;
$tenLoai = $_POST['tenLoai'];
$insertProtype = $protype->insertProtype($tenLoai);
header('location:protype.php');
