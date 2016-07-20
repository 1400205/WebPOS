<?php

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
    <title>Get Company Details</title>


    <link rel="stylesheet" href="css/style-forms.css">

    <script>
        function load()
        {
            document.frm1.submit()
        }
    </script>


</head>

<body>


<br><br>
<section>
    <form class="login-form" name="frm1" method="post" action="" enctype="multipart/form-data">
        <div class="content">
            <div class="header">
                <h1>Add Company Details:</h1>
                <span>Enter company name and upload logo</span>
            </div>
            <fieldset>

                <br>
                <label>   <?php echo $resultText;?><br></label><br>
                <input type="text" name="company" class="input username" value= <?php echo $resultText;?><br>/>  <br>

                <label>Image File:</label><br>
                <input type="file" name="fileToUpload" id="fileToUpload"><br><br>

                <br>

                <div class="footer">
                    <input type="hidden" class="button" name="submit" value="Submit" /><br>
                    <div class="error"><span><?php echo $msg;?></span></div>

                </div>

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