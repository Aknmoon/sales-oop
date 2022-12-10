<?php

require_once "database.php";

class User extends Database{

    //registation.php
    public function register($first_name, $last_name, $username, $password){

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users`(`first_name`, `last_name`, `username`, `password`) VALUES ('$first_name','$last_name','$username','$password')";

        if($this->conn->query($sql)){

            header('location: ../views');
            exit;   
        }else{
            die('Error Inserting User: '.$this->conn->error);
        }
    }



    //view/index.php
    public function login($username, $password)
    {
        $sql = "SELECT * FROM `users` WHERE `username` = '$username'";

        if($result = $this->conn->query($sql))
        {

            if($result->num_rows == 1)
            {

                $user = $result->fetch_assoc();

                //これ$password, $user['password']はどういう意味？
                if(password_verify($password, $user['password']))
                {

                    session_start();
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['fullname'] = $user['first_name']. " " . $user['last_name'];

                    header('location: ../views/dashboard.php');
                    exit;
                }else{
                    die('Password is incorrect');
                }

            }else{
                die('Username Not Found');
            }

        }else{
            die('Error Logiing in' .$this->conn->error);
        }

    }

    //dashboard.php
    public function getAllProducts(){

        $sql = "SELECT * FROM products";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("Error retrieving all products: " .$this->conn->error);
        }

    }


















}