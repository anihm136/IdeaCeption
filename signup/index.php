<?php
$pagename = "signup";
include("../header.php");
?>
    <main class="main_body">
      <div id="sign_up">
        <form id="signup_form" action="../api/signup.php">
          <label for="text" style="font-size: 16px;">Username</label>
          </br>
          <input type="text" class="username" name="userName">
          </br>
          <label for="email" style="font-size: 16px;">E-mail</label>
          </br>
          <input type="email" class="email" name="userMail">
          </br>
          <label for="password" style="font-size: 16px;">Password</label>
          </br>
          <input type="password" class="password" name="userPass">
          </br>
          <center><button id="signup_button" name="signup_submit" value="1">SIGN UP</button></center>
          </br>
        </form>
      </div>
    </main>
    <script src="../scripts/signup.js"></script>            
<?php
include("../footer.php");
?>

