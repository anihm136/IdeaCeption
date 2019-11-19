<?php
$pagename = "login";
include("../header.php");
?>
    <main class="main_body">
      <div id="login_details">
        <form id="login_form" action="../api/login.php">
          <div class="alert alert-danger login-error" style="display:none"></div>
          <label for="email" style="font-size: 16px;">Username/E-mail</label>
          </br>
          <input type="text" class="email" name="userMail">
          </br>
          <label for="password" style="font-size: 16px;">Password</label>
          </br>
          <input type="password" class="password" name="userPass">
          </br>
          <button class="btn btn-secondary btn-block" name="login_submit" value="1">LOGIN</button>
          </br>
        </form>
      </div>
      <div id="login_footer">
        <div class="block"><a href="../signup" class="btn btn-primary">SIGN UP</a></div>
        <div class="block"><span id="forgot"><a href="#">Forgot password ?</a></span></div>
      </div>
    </main>
    <script src="../scripts/login.js"></script>            
<?php
include("../footer.php");
?>
