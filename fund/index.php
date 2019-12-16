<?php 
$pagename = "fund";
include('../header.php');
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 nav-container">
      <?php include('../sidebar.php');?>
    </div>
    <div class="col-md-10">
      <div class="alert alert-custom" style="display:none">
        <p>Please login to fund idea!</p>
        <button class="btn btn-login" onclick="login_redirect()">LOGIN NOW</button>
      </div>
      <main>
        </br>
        <h2 id="main_body_text" style="font-size: 30px;">CHOOSE AMOUNT TO DONATE</h2>
        </br></br>
        <button class="fund_button" value="one_hundred" name="100">100</button> 
        <button class="fund_button" value="two_hundred" name="200">200</button> 
        <button class="fund_button" value="five_hundred" name="500">500</button> 
        </br></br>
        <h1 style="margin-left: 360px;">OR</h1>
        </br>
        <h2 style="margin-left: 100px;">ENTER AMOUNT : 
          <input type="number" id="custom_fund" name="custom_amount">
        </h2>
        </br>
        <center><button id="fund_submit" >FUND</button></center>
      </main>
    </div>
  </div>
</div>

<script src="../scripts/fund.js"></script>

<?php 
include('../footer.php');
?>


