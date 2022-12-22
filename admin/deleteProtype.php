<?php
include "./config.php";
require "./models/db.php";
require "./models/protype.php";
$protype = new Protype;
if (isset($_GET['maloai'])) {
    $delete = $protype->deleteProtype($_GET['maloai']);
    header('location:protype.php');
}
