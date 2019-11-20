<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  header("Access-Control-Allow-Origin: *");
  header("Content-type: text/plain");

  include_once("../backend/config/database.php");
  include_once("../backend/models/post.php");

  $database = new Database();
  $db = $database->connect();

  $post = new Post($db);

  if (isset($_POST['pagenum'])) {
    $pagenum = intval($_POST['pagenum']);
  } else {
    $pagenum = 1;
  }
  if (isset($_POST['num_per_page'])) {
    $num_per_page = intval($_POST['num_per_page']);
  } else {
    $num_per_page = 5;
  }
  
  $post->getPosts($pagenum, $num_per_page);
} else {
  header("Location: ../");
}
?>

