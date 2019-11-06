<?php
$pagename = "add";
include("../header.php");
?>
<main class="main_body" id="utility">
  <div id="utility_bar">
    <p id="bold" style="font-weight:bold">B</p>
    <p id="italics" style="font-style:italic">I</p>
    <p id="underline" style="text-decoration: underline">U</p>
    <p id="strikethrough" style="text-decoration: strikethrough">S</p>
    <p id="quote">Q</p>
    <p id="code">&lsaquo;C&rsaquo;</p>
  </div>
  <div id="spacer"></div>
</main>
<div class="main_body" id="input_area">
  <textarea id="input" placeholder="Type in your idea here"></textarea>
  <div id="view"></div>
</div>
<div class="main_body" id="submit_button">
  <button id="add_idea_button" onclick="testfunc()">ADD  IDEA</button>
</div>
<script src="../scripts/showdown.min.js"></script>
<script src="../scripts/add.js"></script>
<?php
include("../footer.php");
?>
