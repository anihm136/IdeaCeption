<?php
$pagename = "add";
include("../header.php");
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 nav-container">
      <?php include("../sidebar.php");?>
    </div>
  
    <div class="col-md-10">
      <div class="title-input">
        <input type="text" name="title" class="title" placeholder="Title">
      </div>
      <div class="alert alert-danger signup-error" style="display:none"></div>
      <main id="input_area">
        <div id="utility">
          <div id="utility_bar">
            <p id="bold" style="font-weight:bold">B</p>
            <p id="italics" style="font-style:italic">I</p>
            <p id="underline" style="text-decoration: underline">U</p>
            <p id="strikethrough" style="text-decoration: strikethrough">S</p>
            <p id="quote">Q</p>
            <p id="code">&lsaquo;C&rsaquo;</p>
          </div>
          <textarea id="input" placeholder="Type in your idea here"></textarea>
          <!-- <div id="spacer"></div> -->
        </div>
        <div id="view"></div>
      </main>
      <center><button class="btn btn-secondary btn-block" onclick="testfunc()" id="add_idea_btn">ADD  IDEA</button></center>
    </div>
  </div>
</div>

<script src="../scripts/showdown.min.js"></script>
<script src="../scripts/add.js"></script>

<?php
include("../footer.php");
?>
