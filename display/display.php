<?php
if (!isset($_GET['id'])) {
  header("Location: ../browse");
} else {
  
}
$pagename = "display";
include("../header.php");
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 nav-container">
      <?php include("../sidebar.php");?>
    </div>
    <div class="col-md-10">
      <main id="input_area">
        <p>Title: <?php echo ?></p>
        <div id="view"></div>
      </main>
      <center><button class="btn btn-secondary btn-block" onclick="testfunc()">ADD  IDEA</button></center>
    </div>
  </div>
</div>

<script src="../scripts/showdown.min.js"></script>
<script src="../scripts/add.js"></script>

<?php
include("../footer.php");
?>

