<?php

require_once "../classes/user.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//PASSWORD_DEFAULT will use the strongest alogorithm available
$origin = $_POST['btn_register']; //$origin = "dashboard" / "register"

$user = new User;
$user->createUser($first_name, $last_name, $username, $password, $origin);

