<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 04:47
 */

//start session

//session_start();
include ("myglobal.php");
include ("clsGetProductForSupplier.php");
//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Get Product For Supplier</title>


    <link rel="stylesheet" href="css/style-forms.css">
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Search for Product for Supplier:</h1>
                <span>Search for Product for Supplier.</span>
            </div>
            <fieldset>

                <br>
                <label>Product Name:</label><br>
                <input type="text" name="productName" class="input username" placeholder="Enter product name to search" />  <br>

                <br>

                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>
                    <div class="error"><span><?php echo $error;?></span></div>

                </div>

            </fieldset>
            <div id="photolist">

                <?php echo $resultText;?><br>
                <div class="error"><span><a href="allPersons.html"> Click here to Exit this Task</a></a></span></div>

            </div>

        </div>
    </form>

</section>
</div>

</body>
</html>