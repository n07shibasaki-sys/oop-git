<?php

session_start();

require "../classes/Product.php";

$product_obj = new Product();

if (!isset($_POST['payment'], $_SESSION['total_price'], $_SESSION['product'], $_SESSION['buy_quantity'])) {
    header("location: ../views/Dashboard.php");
    exit;
}

$payment = $_POST['payment'];

$total_price = $_SESSION['total_price'];
$product = $_SESSION['product'];
$buy_quantity = $_SESSION['buy_quantity'];

if ($payment < $total_price) {
    header("location: ../views/Payment.php");
    exit;
}

$product_obj->buy($product['id'], $buy_quantity);

unset($_SESSION['product']);
unset($_SESSION['buy_quantity']);
unset($_SESSION['total_price']);

header("location: ../views/Dashboard.php");
exit;

?>
