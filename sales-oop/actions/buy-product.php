<?php

require_once "../classes/product.php";

$prouct_id = $_POST['product_id']
$price = $_POST['price'];
$stocks_left = $_POST['stocks_left'];
$buy_quantity = $_POST['buy_quantity'];


$product = new Product;

$product->setProduct($prouct_id, $price, $stocks_left, $buy_quantity);

$result = $product->countProduct();


?>