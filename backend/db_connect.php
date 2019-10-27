<?php
  $requestMethod = $_SERVER['REQUEST_METHOD'];
  if ($requestMethod === "POST") {
    $hostname = "localhost";
    $dbname = "ideaception"; 
    $user = "root";
    $password = "";

    $conn = new PDO("mysql:host=".$hostname.";dbname=".$dbname, $user, $password);
    // if ($conn) {
    //   echo "Success";
    // }
    // else {
    //   die("Failure");
    // }
  }
  else {
    header("HTTP/1.1 403 Access Forbidden");
    header("Location: ../");
  }
?>
