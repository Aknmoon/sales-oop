<?php

class Database{
    private $sever_name = "localhost";
    private $username = "root";
    private $password = "root";
    private $db_name = "sales_oop";
    protected $conn;

    public function __construct(){

        $this->conn = new mysqli(
            //mysqliってなに
            $this->sever_name,
            $this->username,
            $this->password,
            $this->db_name
        );

        if($this->conn->connect_error){
            die("Unable to connect to database" .$this->conn->connect_error);
        }
    }
}


?>