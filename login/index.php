<?php
$pagename = "login";
include("../header.php");
?>
    <main class="main_body">
      <div id="login_details">
        <form id="login_form" action="../api/login.php">
          <label for="email" style="font-size: 16px;">E-mail</label>
          </br>
          <input type="email" class="email" name="userMail">
          </br>
          <label for="password" style="font-size: 16px;">Password</label>
          </br>
          <input type="password" class="password" name="userPass">
          </br>
          <center><button id="login_button" name="login_submit" value="1">LOGIN</button></center>
          </br>
        </form>
      </div>
      <div id="login_footer">
        <div style="display:block; text-align:center;"><button id="sign_up">SIGN UP</button></div>
        <div style="display:block; text-align:center;"><span id="forgot"><a href="#">Forgot password ?</a></span></div>
      </div>
    </main>
    <script src="../scripts/login.js"></script>            
<?php
include("../footer.php");
?>
