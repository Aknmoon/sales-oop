<?php

require_once "database.php";

class Product extends Database{


    public function addProduct($product_name, $price, $quantity){
        $sql = "INSERT INTO `products`(`product_name`, `price`, `quantity`) VALUES ('$product_name', $price, $quantity)";

        if($this->conn->query($sql)){

            header('location: ../views/dashboard.php');
            exit;
        }else{
            die("Error adding new product:" .$this->conn->error);
        }

    }

    public function displayAllProducts(){

        $sql = "SELECT * FROM products";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Eroor retrieving all products: " .$this->conn->error);
        }

    }

    public function getProduct($product_id){

        $sql = "SELECT * FROM products WHERE id = $product_id ";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("Error retrieving all products: " .$this->conn->error);
        }

    }


    public function updateProduct($product_id, $product_name, $price, $quantity){
        $sql = "UPDATE `products` SET `product_name`='$product_name',`price`='$price',`quantity`='$quantity' WHERE `id` = $product_id";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Eroor updating Product: '. $this->conn->error);
        }
        
    }

    public function deleteProduct($product_id){
        $sql = "DELETE FROM products WHERE `id` = $product_id";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Error deleting user: '. $this->conn->error);
        }

    }


    public function buyProduct($product_id, $quantity){
        $sql = "UPDATE `products` SET `quantity`='$quantity' WHERE `id` = $product_id";

        if($this->conn->query($sql)){
            header('location: ../views/payment.php');
            exit;
        }else{
            die('Error updating quantity: '. $this->conn->error); 
        }

    }

    // public function countProduct($product_id, $price, $stocks_left, $buy_quantity){

        
    //     if($buy_quantity <=  $stock_left){
    //         $total_price = $price * $buy_quantity;
    //         return $total_price;

    //     }else{
    //         return "you cannnot buy it";
    //     }

    // }

    // public function displayPayment(){

    // }

    private $price; 
    private $stocks_left;
    private $buy_quantity;

    public function setProduct($price, $stocks_left, $buy_quantity){
        $this->price = $price;
        $this->stocks_left = $stocks_left;
        $this->buy_quantity = $buy_quantity;
    }

    public function countProduct(){

        if($this->buy_quantity <= $this->stocks_left){
            $total_price = $this->price * $this->buy_quantity;
            return $total_price;

        }else{
            return "you cannnot buy it";
        }

    }




}

?>