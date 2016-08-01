<?php

//start session

//session_start();
include ("myglobal.php");
include ("login.php");

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Login</title>


    <link rel="stylesheet" href="css/style-login.css">

    <style id="antiClickjack">body{display:none !important;}</style>

   <!-- <script type="text/javascript">
        if (self === top) {
            var antiClickjack = document.getElementById("antiClickjack");
            antiClickjack.parentNode.removeChild(antiClickjack);
        } else {
            top.location = self.location;
        }
    </script>-->

    <script type="text/javascript">
        if (top.location != location) {
            top.location.href = document.location.href ;
        }
    </script>
</head>

<body>


        <br><br>
        <section>
        <form class="login-form" method="post" action="">
            <div class="content">
            <div class="header">
                <h1>Welcome to Web POS</h1>
                <span>This is a POS for sales of car parts</span>
            </div>
            <fieldset>
            <label>Username:</label><br>
            <input type="text" name="username" class="input username" placeholder="username" /><br><br>
                <div class="user-icon"></div>
            <label>Password:</label><br>
            <input type="password"  name="password" class="input password" placeholder="password" />  <br><br>
                <div class="pass-icon"></div>
                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Login" />
                </div>
                <div class="header"><span><?php echo $error;?></span></div>
            </fieldset>
            </div>
        </form>

        </section>

    </div>
<br><br>

</body>
</html>