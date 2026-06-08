<?php

session_start();

require "../classes/Product.php";

$product_obj = new Product();

if (!isset($_POST['product_id'], $_POST['buy_quantity'])) {
    header("location: ../views/Dashboard.php");
    exit;
}

$product_id = $_POST['product_id'];
$buy_quantity = $_POST['buy_quantity'];

$product = $product_obj->getProduct($product_id);

$total_price = $product['price'] * $buy_quantity;

$_SESSION['product'] = $product;
$_SESSION['buy_quantity'] = $buy_quantity;
$_SESSION['total_price'] = $total_price;

header("location: ../views/Payment.php");
exit;

?>
