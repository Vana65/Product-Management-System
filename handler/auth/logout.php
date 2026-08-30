<?php
session_start();
require_once dirname(__FILE__, 3) . '/config.php';

$cart = $_SESSION['cart'] ?? [];

unset($_SESSION['user'], $_SESSION['message'], $_SESSION['errors']);
$_SESSION['cart'] = $cart;

header("Location: " . Base_URL . "views/auth/login.php");
exit;
?>