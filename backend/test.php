<?php

if (isset($_POST['login_submit'])) {
  require_once("db_connect.php");

  $useradd = new PDO();
    // echo $_POST['userMail'];
    // echo $_POST['userPass'];
}
else {
  header("Location: ../login/");
}
?>
