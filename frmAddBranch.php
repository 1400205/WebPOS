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

<body>

<div id="photolist">

    <?php echo $resultText;?><br>
    <?php echo $resultTextPhoto;?><br>

</div>
<br><br>


<section>
    <form class="login-form" method="post" action="" enctype="multipart/form-data">
        <div class="content">
            <div class="header">
                <h1>Add Company Details:</h1>
                <span>Enter company name and upload logo</span>
            </div>
            <fieldset>

                <br>
                <label>Company Name:</label><br>
                <input type="text" name="company" class="input username" placeholder="Enter Company Name"/>  <br>

                <label>Image File:</label><br>
                <input type="file" name="fileToUpload" id="fileToUpload"><br><br>

                <br>

                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>
                    <div class="error"><span><?php echo $msg;?></span></div>

                </div>

            </fieldset>


        </div>
    </form>

</section>
</div>

</body>
</html>