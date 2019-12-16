<?php
if (!isset($_GET['id'])) {
  header("Location: ../browse");
}
include_once '../backend/config/database.php';
include_once '../backend/models/post.php';

$database = new Database();
$db = $database->connect();

$post = new Post($db);

$post->getPost($_GET['id']);

$pagename = "display";
include("../header.php");
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 nav-container">
      <?php include("../sidebar.php");?>
    </div>
    <div class="col-md-10">
      <main>
        <p id="title"><?php echo "$post->title"?></p>
        <div id="view"><?php echo nl2br($post->content)?></div>
        <p class="suggestions">Suggestions</p>
        <div class="suggestions-container">
          <input id="suggest-input" class="form-control" type="text" placeholder="Add your suggestion here">
          <center><button class="btn btn-login btn-suggest" onclick="suggestFunc()">Suggest</button></center>
        </div>
      </main>
    </div>
  </div>
</div>

<script src="../scripts/showdown.min.js"></script>
<script src="../scripts/display.js"></script>

<?php
include("../footer.php");
?>

