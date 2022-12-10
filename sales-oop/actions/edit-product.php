<?php

require_once "../classes/product.php";

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$product_obj = new Product;

$product_obj->updateProduct($product_id, $product_name, $price, $quantity);


?>