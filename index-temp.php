
<?php

//start session

//session_start();
include ("myglobal.php");
include ("login.php");

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>


    <link rel="stylesheet" href="css/reset.css">


    <link rel="stylesheet" href="css/style.css">




</head>

<body>

<div class="contain">
    <div id="close" class="close">Close</div>
</div>
<div class="containmain">
    <div class="center">
        <div class="profile">

        </div>
        <form class="form" action="" autocomplete="on">
            <input type="text" class="topform" placeholder="Username" name="username"><br>
            <input type="password" class="bottomform" placeholder="Password" name="password"><br>
            <input type="submit">
        </form>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>




</body>
</html>
