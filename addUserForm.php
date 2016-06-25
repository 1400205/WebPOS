<?php

//start session

//session_start();
include ("myglobal.php");
include ("clsUser.php");
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
        <form class="login-form" method="post" action="">
            <div class="content">
                <div class="header">
                    <h1>Add User:</h1>
                    <span>This page is for adding System Users</span>
                </div>
                <fieldset>
                    <legend> User Details</legend>


                    <br>
                    <label>User name:</label><br>
                    <input type="text" name="username" class="input username" placeholder="Enter User Name" />  <br>

                    <label>Password:</label><br>
                    <input type="password" name="password" class="input password" placeholder="Enter Password" />  <br>
                    <label>Confirm Password :</label><br>
                    <input type="password" name="passwordcon" class="input password" placeholder="Confirm Password" />  <br

                    <div class="footer">
                        <input type="submit" id= "submit" class="button" name="submit" value="Submit" /><br>


                    </div>

                </fieldset>
                <div class="error"><span><?php echo $error;?></span></div>
            </div>
        </form>
    </div>

</section>
</div>

</body>
</html>