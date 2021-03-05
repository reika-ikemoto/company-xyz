<?php

session_start();
//ex) $_SESSION['id] = 4;
session_unset();
session_destroy();

header("location: ../views");
exit;

//Create
//$_SESSION = ['id' => 5, 'user_name' => 'John']; 

//Unset
//$_SESSION = ['id' => NULL, 'user_name' => 'NULL'];

//Destroy
//$_SESSION = [];