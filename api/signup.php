<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: text/plain");

include_once("../backend/config/database.php");
include_once("../backend/models/user.php");

$database = new Database();
$db = $database->connect();

$user = new User($db);

// echo gettype($_POST['userMail']);
// var_dump($_POST);
$user->name = $_POST['userName'];
// echo $user->name;
$user->email = $_POST['userMail'];
$user->passwd = $_POST['userPass'];

$user->signUp();
?>

