<?php

//start session

//session_start();
include ("myglobal.php");
include ("clsCart.php");
//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Add person</title>


    <link rel="stylesheet" href="css/style-forms.css">
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Person Details:</h1>
                <span>This page is for adding details of a person</span>
            </div>
            <fieldset>
               
                <br>
                <label>Quantity:</label><br>
                <input type="number" name="myqty" id="myqty" class="input username" placeholder="QTY" />  <br>

                <label>Transaction ID:</label><br>
                <input type="number" name="transID" id="transID" class="input username" placeholder="Transaction ID" /><br>
                <label>Other Name(s):</label><br>
                <input type="NUMBER" name="proID" id="proID" class="input username" placeholder="Other Name(s)" />  <br>
                
                <div class="footer">
                    <input type="submit" id= "submit" class="button" name="submit" value="Login" /><br>


                </div>

            </fieldset>
            <div class="error"><span><?php echo $error;?></span></div>
            <div class="error"><span><a href="allPersons.html">Click to Exit this Task</a></a></span></div>

        </div>
    </form>

</section>
</div>

</body>
</html>