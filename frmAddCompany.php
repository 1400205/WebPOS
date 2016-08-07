
<?php
//session_start();

$ip=$_SESSION["ip"];
$timeout=$_SESSION ["timeout"];
if (!($ip==$_SERVER['REMOTE_ADDR'])){
    header("location: logout.php"); // Redirecting To Other Page
}

if($_SESSION ["timeout"]+60 < time()){

    //session timed out
    header("location: logout.php"); // Redirecting To Other Page
}else{
    //reset session time
    $_SESSION['timeout']=time();
}
?>
<?php

//start session

//session_start();
include ("myglobal.php");
include ("clsCompany.php");

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
                   
                </div>
                <div class="error"><span><?php echo $msg;?></span></div>

            </fieldset>
            <div id="photolist">

                <?php echo $resultText;?><br>
                <?php echo $resultTextPhoto;?><br>

            </div>

        </div>
    </form>

</section>
</div>

</body>
</html>