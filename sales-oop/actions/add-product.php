<?php

require_once "../classes/product.php";

$product_name = $_POST['product_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$product_obj = new Product;

$product_obj->addProduct($product_name, $price, $quantity);

?>