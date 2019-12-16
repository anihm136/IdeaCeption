<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  header("Access-Control-Allow-Origin: *");
  header("Content-type: text/plain");

  include_once("../backend/config/database.php");
  include_once("../backend/models/post.php");

  $database = new Database();
  $db = $database->connect();

  $post = new Post($db);
  session_start();
  $temp=$_SESSION["current_user"]["name"];

  $post->name = $temp;
  $post->title = $_POST['postTitle'];
  $post->content = $_POST['postContent'];

  $post->postUp();
} else {
  header("Location: ../");
}
?>
