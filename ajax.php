<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;
$brands = isset($_POST['brands']) ?  $_POST['brands'] : null;
$brand_filter = "'" . implode("','", $brands) . "'";

$ProductByBrand = $product->getProductByBrand($brand_filter);
echo json_encode($ProductByBrand);
