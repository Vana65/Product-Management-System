<?php

session_start();

require_once dirname(__FILE__, 3) . '/config.php';
require_once dirname(__FILE__, 3) . '/core/functions.php';

check_authentication();

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: " . Base_URL . "views/cart.php");
    exit;
}

if (isset($_SESSION['cart'][$id])) {
    unset($_SESSION['cart'][$id]);
}

header("Location: " . Base_URL . "views/cart.php");
exit;