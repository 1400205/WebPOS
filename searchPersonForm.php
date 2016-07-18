<?php

//start session

//session_start();
include ("myglobal.php");
include ("searchPerson.php");
//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Search for Person</title>


    <link rel="stylesheet" href="css/style-forms.css">
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Search for person:</h1>
                <span>Enter both First Name and Surname to search for person. This is to enable addition of further information of operson</span>
            </div>
            <fieldset>

                <br>
                <label>First Name:</label><br>
                <input type="text" name="firstname" class="input username" placeholder="Enter first name to search" />  <br>

                <label>Surname:</label><br>
                <input type="text" name="surname" class="input username" placeholder="Enter Surname to Search" /><br>

                <br>

                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>
                    <div class="error"><span><?php echo $error;?></span></div>

                </div>

            </fieldset>
            <div id="photolist">

                <?php echo $resultText;?><br>
                <?php echo $resultTextPhoto;?><br>
                <a href="index.php">Click to Exit this Task</a>

            </div>

        </div>
    </form>

</section>
</div>

</body>
</html>