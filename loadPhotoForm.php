<?php

//start session

//session_start();
include ("myglobal.php");
include ("addphoto.php");
//include("photo_preview.php");
//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Login</title>


    <link rel="stylesheet" href="css/style-forms.css">
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action=""enctype="multipart/form-data">
        <div class="content">
            <div class="header">
                <h1>Load photo of person:</h1>
                <span>Click on the button "Choose file" and upload photo of person</span>
            </div>
            <fieldset>

                <br>
                <label>Image File:</label><br>
                <input type="file" name="fileToUpload" id="fileToUpload"><br><br>


            </fieldset>
            <div id="photolist">
              <?php echo  $resultText;?>
            </div>


            <div class="footer">
                <input type="submit" class="button" name="submit" value="Submit" /><br>


            </div>
            <div class="error"><span> <a href="index.php"> <?php echo $msg;?></a></span></div>
        </div>
    </form>

</section>
</div>

</body>
</html>