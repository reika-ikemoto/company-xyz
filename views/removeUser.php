<?php
    session_start();
    include_once "../classes/user.php";

    //in session id is not existing / you did not log in
    if(!$_SESSION['id']){
        header("location: loginRedirect.php");
        exit;
    }

$user = new User;
$user_id = $_GET['user_id'];

$user->deleteUser($user_id);