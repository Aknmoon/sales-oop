<?php

require_once "../classes/user.php";

$username = $_POST['username'];
$password = $_POST['password'];

$use_obj = new User;

$use_obj->login($username, $password);


?>