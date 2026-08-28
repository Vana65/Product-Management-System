<?php

session_start();

require_once dirname(__FILE__, 3) . '/config.php';
require_once dirname(__FILE__, 3) . '/core/functions.php';

check_authentication();


$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: " . Base_URL . "views/product.php");
    exit;
}

// لو مفيش cart اعمله
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// لو المنتج موجود زود الكمية
if (isset($_SESSION['cart'][$id])) {

    $_SESSION['cart'][$id]++;

} else {

    // أول مرة يتضاف
    $_SESSION['cart'][$id] = 1;
}

header("Location: " . Base_URL . "views/cart.php");
exit;