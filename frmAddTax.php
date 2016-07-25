<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 19:08
 */

//session_start();
//include ("clsAddBranch.php");
include ("myglobal.php");

include ("clsAddTax.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Tax Details></title>


    <link rel="stylesheet" href="css/style-forms.css">





</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Tax Details:</h1>
                <span>This is to Enter Tax Details: </span>
            </div>
            <fieldset>

                <br>
                <label>Tax Name:</label><br>
                <input type="text" name="taxName" class="input username" placeholder="Enter Section Name"/>  <br>
                <br>
                <label>Tax Rate:</label><br>
                <input type="number" min="0" step="any"  name="taxRate" class="input username" placeholder="Enter Section Name"/>  <br>



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