<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 19:34
 */

//session_start();
//include ("clsAddBranch.php");
include ("myglobal.php");

include ("clsAddDiscount.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Discount Details></title>


    <link rel="stylesheet" href="css/style-forms.css">





</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Discount Details:</h1>
                <span>This is to Enter Discount Details: </span>
            </div>
            <fieldset>

                <br>
                <label>Percentage Discount:</label><br>
                <input type="number" min="0" step="any"name="percentDiscount" class="input username" placeholder="Enter Percent Discount"/>  <br>
                <br>
                <label>Amount Discount:</label><br>
                <input type="number" min="0" step="any"  name="amountDiscount" class="input username" placeholder="Enter Amount Discount"/>  <br>



                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>


                </div>
                <div class="error"><span><?php echo $error;?></span></div>

            </fieldset>


        </div>
    </form>

</section>
</div>

</body>
</html>