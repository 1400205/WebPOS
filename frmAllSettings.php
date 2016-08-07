<?php
session_start();

$ip=$_SESSION["ip"];
$timeout=$_SESSION ["timeout"];
if (!($ip==$_SERVER['REMOTE_ADDR'])){
    header("location: logout.php"); // Redirecting To Other Page
}

if($_SESSION ["timeout"]+10 < time()){

    //session timed out
    header("location: logout.php"); // Redirecting To Other Page
}else{
    //reset session time
    $_SESSION['timeout']=time();
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> All Settins</title>


    <link rel="stylesheet" href="css/style-forms.css">
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>All Settins</h1>
                <span>All Settings to be Done Before Any Transactions</span>
            </div>

            <div id="photolist">
                <ul class="list-unstyled menu-parent" id="mainMenu">
                    <div>
                        <a  href="frmCompanySetting.php" class="waves-effect waves-light">
                            <i class="icon ti-id-badge"></i>
                            <span class="text">Company Setup</span>
                        </a>
                    </div>
                    <br>
                    <div>
                        <a  href="frmAddressSettings.php" class="waves-effect waves-light">
                            <i class="icon ti-id-badge"></i>
                            <span class="text">Address settings</span>
                        </a>
                    </div>
                    <br>
                    <div>
                        <a  href="allPersons.php" class="waves-effect waves-light">
                            <i class="icon ti-id-badge"></i>
                            <span class="text">All persons Settings</span>
                        </a>
                    </div>
                    <br>

                    <div>
                        <a  href="frmProductSetting.php" class="waves-effect waves-light">
                            <i class="icon ti-id-badge"></i>
                            <span class="text">Product Settings</span>
                        </a>
                    </div>


                    <br>
                    <div>
                        <a  href="frmSaleSetting.php" class="waves-effect waves-light">
                            <i class="icon ti-id-badge"></i>
                            <span class="text">Sales Settings</span>
                        </a>
                    </div>

                    <br>


                    <div>
                        <a  href="home1.php" class="waves-effect waves-light">
                            <i class="icon ti-id-badge"></i>
                            <span class="text">Click here to go back to home page</span>
                        </a>
                    </div>

                </ul>
            </div>

        </div>
    </form>

</section>
</div>

</body>
</html>