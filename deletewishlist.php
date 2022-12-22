<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    unset($_SESSION['wishlist'][$id]);
    header('location:store.php');
} else {
    unset($_SESSION['wishlist']);
}
