<?php
if ($_REQUEST["method"] == "POST") {
  header("Access-Control-Allow-Origin: *");
  header("Content-type: text/plain");

  include_once("../backend/config/database.php");
  include_once("../backend/models/user.php");

  $database = new Database();
  $db = $database->connect();

  $user = new User($db);

  $user->name = $_POST['userName'];
  $user->email = $_POST['userMail'];
  $user->passwd = $_POST['userPass'];

  $user->signUp();
} else {
  header("Location: ../signup");
}
?>
