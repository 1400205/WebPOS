<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 15:33
 */


//start session

//session_start();
//include ("clsAddBranch.php");
include ("myglobal.php");

include ("clsAddCurrency.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Supplier Details></title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Currency Details:</h1>
                <span>Enter Currency Details: </span>
            </div>
            <fieldset>

                <br>
                <label>Currency</label><br>
                <input type="text" name="currency" class="input username" placeholder="Enter Currency"/>  <br>

                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>


                </div>
                <p>  <div class="error"><span><?php echo $error;?></span></div></p>

            </fieldset>


        </div>
    </form>

</section>
</div>

</body>
</html>