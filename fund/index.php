<?php 
$pagename = "fund";
include('../header.php');
?>
    <div class="main_body">
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

        <button id="fund_submit" >FUND</button>

    </div>
<?php 
include('../footer.php');
?>


