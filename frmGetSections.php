<?php

//start session

//session_start();
include ("myglobal.php");
include ("clsGetSections.php");

//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Get Section Details</title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="" enctype="multipart/form-data">
        <div class="content">
            <div class="header">
                <h1>Get Section Details:</h1>
                <span>Get Section details and Add Racks</span>
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