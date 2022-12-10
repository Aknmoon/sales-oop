<?php

require_once "../classes/user.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];

$user_obj = new User;

$user_obj->register($first_name, $last_name, $username, $password);

?>