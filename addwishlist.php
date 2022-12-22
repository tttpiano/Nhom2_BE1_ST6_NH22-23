<?php session_start();
if (isset($_GET['id'])) :
    $id = $_GET['id'];
    if (isset($_SESSION['wishlist'][$id])) :
        $_SESSION['wishlist'][$id]++;
    else :
        $_SESSION['wishlist'][$id] = 1;
    endif;
    header('location:index.php?id=' . $id);
endif;
