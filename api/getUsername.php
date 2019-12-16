<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  header("Access-Control-Allow-Origin: *");
  header("Content-type: text/plain");

  session_start();
  $temp=$_SESSION["current_user"]["name"];
  echo $temp;

  } else {
  header("Location: ../");
}
?>

