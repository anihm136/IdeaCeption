<?php

use function PHPSTORM_META\type;

header("Access-Control-Allow-Origin: *");
    header("Content-type: text/plain");

    include_once("../backend/config/database.php");
    include_once("../backend/models/user.php");

    $database = new Database();
    $db = $database->connect();

    $user = new User($db);

    // echo gettype($_POST['userMail']);
    $user->name = $_POST['userMail'];
    // echo $user->name;
    $user->email = $_POST['userMail'];
    $user->passwd = $_POST['userPass'];

    $user->userAuth();
?>