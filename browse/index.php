<?php
$pagename = "browse";
include("../header.php");
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 nav-container">
      <?php include("../sidebar.php");?>
    </div>
    <div class="col-md-10">
      <div>
        </br></br>
        <span id="browse_ideas">BROWSE IDEAS</span>
        <button id="filter">FILTER</button>
        <select id="sort" title="This is a title">
          <option value="" selected disabled hidden>SORT</option>
          <option>By Name</option>
          <option>By Time</option>
          <option>By Popularity</option>
        </select>
        <hr color="black"><br>
        <div class="idea-container"></div>
        <hr color="black"><br>
        <div class='page-container'>
          <button class="btn btn-login" >&#8592; Previous</button>
          <button class="btn btn-login" >Next &#8594;</button>
        </div>
        <!-- <div class="idea_template"> -->
          <!-- <img src="C:\Users\Rohit\Desktop\IdeaCeption\images\logo-dark.png" > -->
          <!-- <h2 class="idea_title">Title of Idea</h2> -->
          <!-- <div class="idea_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio provident, iste enim voluptates quas earum mollitia animi quam exercitationem sed perspiciatis veritatis ipsam sapiente illo, in pariatur, omnis eius sequi.</div> -->
        <!-- </div> -->
<!--  -->
        <!-- <div class="idea_template"> -->
          <!-- <img src="C:\Users\Rohit\Desktop\IdeaCeption\images\logo-dark.png" > -->
          <!-- <h2 class="idea_title">Title of Idea</h2> -->
          <!-- <div class="idea_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio provident, iste enim voluptates quas earum mollitia animi quam exercitationem sed perspiciatis veritatis ipsam sapiente illo, in pariatur, omnis eius sequi.</div> -->
        <!-- </div> -->
<!--  -->
        <!-- <div class="idea_template"> -->
          <!-- <img src="C:\Users\Rohit\Desktop\IdeaCeption\images\logo-dark.png" > -->
          <!-- <h2 class="idea_title">Title of Idea</h2> -->
          <!-- <div class="idea_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio provident, iste enim voluptates quas earum mollitia animi quam exercitationem sed perspiciatis veritatis ipsam sapiente illo, in pariatur, omnis eius sequi.</div> -->
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>
    <script src="../scripts/browse.js"></script>
<?php
include("../footer.php");
?>

