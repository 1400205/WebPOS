<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 01:52
 */

/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 21/07/2016
 * Time: 17:19
 */


//start session

//session_start();
include ("myglobal.php");
include ("clsGetProduct.php");

//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Get Product Details</title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="" enctype="multipart/form-data">
        <div class="content">
            <div class="header">
                <h1>Get Product Details:</h1>
                <span>Get Product details and Add Supplied Products</span>
            </div>
            <fieldset>

                <br>
                <?php echo $resultText;?><br>

                <br>

                <div class="footer">
                    <div class="error"><span><?php echo $msg;?></span></div>

                </div>

            </fieldset>
            <div id="photolist">



            </div>

        </div>
    </form>

</section>
</div>

</body>
</html>