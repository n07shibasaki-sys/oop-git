<?php

require_once "../classes/Product.php";

$product_obj = new Product;

$product_obj->update($_POST);

?>