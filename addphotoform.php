
<?php
//session_start();

include("addphoto.php");


//include ("secureSessionID.php");//verify user session
//include ("inactiveTimeOut.php");//check user idle time

//check session highjacking

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Photo</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<div class="main">

<div class="formbox">
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
            
            <div class="footer">
        <input type="submit" name="submit" value="Submit Photo" />
                </div>
            </fieldset>
            </div>
    </form>
    <div class="msg"><?php echo $msg;?></div>
</div>
    </div>
</body>
</html>