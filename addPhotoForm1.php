<?php

//start session

//session_start();
//include ("myglobal.php");
include ("addphoto.php");
//include ("connect.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Login</title>


    <link rel="stylesheet" href="css/style-forms.css">
  <link rel="stylesheet" href="css/stylelegend.css">
</head>

<body>


<br><br>
<section>
    <div class="tableBox">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="content">
                <div class="header">
                    <h1>Add Address Of Person:</h1>
                    <span>This page is for adding Address  of a person</span>
                </div>
                <fieldset>
                    <legend> Adderess Details</legend>

                    <label>Image File:</label><br>
                    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                    <br>

                    <div class="footer">
                        <input type="submit" id= "submit" class="button" name="submit" value="Submit Photo" /><br><br>

                        <div class="error"><?php echo $msg;?></div>

                    </div>

                </fieldset>
            </div>
        </form>
    </div>

</section>
</div>

</body>
</html>