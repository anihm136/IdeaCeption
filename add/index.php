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
        <input type="text" name="title" class="title" placeholder="Title" required>
        <p class="alert alert-danger required-message" style="display:none">Please enter a title</p>
      </div>
      <div class="alert alert-custom" style="display:none">
        <p>Please login to add idea!</p>
        <button class="btn btn-login" onclick="login_redirect()">LOGIN NOW</button>
      </div>
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
        </div>
        <div id="view"></div>
      </main>
      <center><button class="btn btn-secondary btn-block" onclick="addfunc()" id="add_idea_btn">ADD IDEA</button></center>
    </div>
  </div>
</div>

<script src="../scripts/showdown.min.js"></script>
<script src="../scripts/add.js"></script>

<?php
include("../footer.php");
?>
