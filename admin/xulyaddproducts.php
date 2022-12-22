<?php
include "./config.php";
require "./models/db.php";
require "./models/product.php";
$products = new Product;
$tenSP = $_POST['tenSanPham'];
$hang = $_POST['hang'];
$loai = $_POST['loai'];
$gia = $_POST['gia'];
$hinh = $_FILES['hinh']['name'];
$moTa = $_POST['mota'];
$spNB = isset($_POST['spnoibat']) ? 1 : 0;

$insertProduct = $products->insertProduct($tenSP, $hang, $loai, $gia, $hinh, $moTa, $spNB);
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES['hinh']['name']);
move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
header('location:products.php');
