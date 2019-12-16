<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  header("Access-Control-Allow-Origin: *");
  header("Content-type: text/plain");

  include_once("../backend/config/database.php");
  include_once("../backend/models/suggest.php");

  $database = new Database();
  $db = $database->connect();

  $suggest = new Suggest($db);

  $suggest->getComments($_POST['post_id']);
} else {
  header("Location: ../");
}
?>
