<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 05:15
 */

/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 21/07/2016
 * Time: 17:30
 */


//start session

//session_start();
//include ("clsAddBranch.php");
include ("myglobal.php");

include ("clsAddShelf.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Shelf Details></title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Shelf Details:</h1>
                <span>Enter Shelf Details: </span>
            </div>
            <fieldset>

                <br>
                <label>Shelf Name:</label><br>
                <input type="text" name="shelf" class="input username" placeholder="Enter Rack Name"/>  <br>

                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>


                </div>
                <p>  <div class="error"><span><?php echo $error;?></span></div></p>

            </fieldset>


        </div>
    </form>

</section>
</div>

</body>
</html>