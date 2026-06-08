<?php

require_once "../classes/Product.php";

$product_obj = new Product;

$id = $_GET['id'];

$product_obj->delete($id);

?>