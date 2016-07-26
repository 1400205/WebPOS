<?php

//start session

//session_start();
//include ("clsAddBranch.php");
include ("myglobal.php");

include ("clsLocation.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Location></title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Location Details:</h1>
                <span>Enter Location Details: </span>
            </div>
            <fieldset>

                <br>
                <label>Location Name:</label><br>
                <input type="text" name="clocation" class="input username" placeholder="Enter Location Name"/>  <br>

                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>
                    <div class="error"><span><?php echo $error;?></span></div>


                </div>

            </fieldset>


        </div>
    </form>

</section>
</div>

</body>
</html>