<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php 
if (isset($pagename)) {
  echo '<link rel="stylesheet" href="'.$pagename.'.css">';
  echo '<link rel="icon" href="../images/logo.png">';
}
else {
  echo '<link rel="stylesheet" href="styles/index.css">';
  echo '<link rel="icon" href="images/logo.png">';
}
?>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <title>IdeaCeption</title>
</head>
<?php 
if (isset($pagename)) {
  echo '<body id="'.$pagename.'">';
}
else {
  echo '<body>';
}
?>
    <header>
        <span style="color:#80CBC4">IDEA</span><span style="color:#EEEEEE">CEPTION</span>
    </header>
    <div id="corner-border"></div>
<?php 
if (isset($pagename)) {
  echo '<div id="corner"><img src="../images/logo.png" alt="LOGO" width=140px height=140px></div>';
}
else {
  echo '<div id="corner"><img src="images/logo.png" alt="LOGO" width=140px height=140px></div>';
}
?>
