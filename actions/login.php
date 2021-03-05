<?php
require_once "../classes/user.php";

$user_name = $_POST['username'];
$password = $_POST['password'];

$user = new User;
$user->login($user_name, $password);
