<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 04:47
 */

//start session

//session_start();
include ("myglobal.php");
include ("frmGetPersonForSupplier.php");
//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Get Person For Supplier</title>


    <link rel="stylesheet" href="css/style-forms.css">
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Search for Contact Person of Supplier:</h1>
                <span>Enter both First Name and Surname to search for Contact Person of Supplier.</span>
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
                <div class="error"><span><a href="allPersons.html"> Click here to Exit this Task</a></a></span></div>

            </div>

        </div>
    </form>

</section>
</div>

</body>
</html>