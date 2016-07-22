<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 02:40
 */


//start session

//session_start();
include ("myglobal.php");
include ("clsGetShelf.php");

//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Get Shelve Details</title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="" enctype="multipart/form-data">
        <div class="content">
            <div class="header">
                <h1>Get Shelve Details:</h1>
                <span>Get Shelve details and Stock Products</span>
            </div>
            <fieldset>


                <br>
                   <?php echo $resultText;?>
               

                

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