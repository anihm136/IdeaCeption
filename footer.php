<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../scripts/common.js" type="text/javascript"></script>

<div class="container-fluid">
  <div class="row">
    <div class="footer-container col-md-12">  
      <footer><p>FOOTER</p></footer>
    </div>
  </div>
</div>

<div id="corner-border"></div>
<?php 
if (isset($pagename)) {
echo '<div id="corner"><a href="../"><img src="../images/logo.png" alt="LOGO" width=140px height=140px></a></div>';
}
else {
echo '<div id="corner"><img src="images/logo.png" alt="LOGO" width=140px height=140px></div>';
}
?>
</body>
</html>

