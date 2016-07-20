<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 20/07/2016
 * Time: 20:49
 */


//start session

//session_start();
include ("myglobal.php");
include ("getCompany.php");

//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Company Details</title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body onload="document.frm1.submit()">

<div id="photolist">



</div>
<br><br>


<section>

    <form class="login-form" method="POST" action="" name="frm1">
        <div class="content">
            <div class="header">
                <h1>Add Company Details:</h1>
                <span>Enter company name and upload logo</span>
            </div>
            <fieldset>

                <br>
                <?php echo $resultText;?><br>
                <?php echo $resultTextPhoto;?><br>
                <br>

                <div class="footer">

                    <div class="error"><span><?php echo $msg;?></span></div>

                </div>

            </fieldset>


        </div>
    </form>

</section>
</div>

</body>
</html>