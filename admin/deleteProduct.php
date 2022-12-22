<?php
include "./config.php";
require "./models/db.php";
require "./models/product.php";
$products = new Product;
if (isset($_GET['maSP'])) {
    $delete = $products->deleteProduct($_GET['maSP']);
    header('location:products.php');
}
