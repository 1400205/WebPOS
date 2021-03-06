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
    <title> Login</title>


    <link rel="stylesheet" href="css/style-forms.css">
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>All persons Dashboard</h1>
                <span>Click link to perform action on type of person</span>
            </div>

            <div id="photolist">
                <ul class="list-unstyled menu-parent" id="mainMenu">
                    <div>
                        <a  href="personForm.php" class="waves-effect waves-light">
                            <i class="icon ti-id-badge"></i>
                            <span class="text">Add Person</span>
                        </a>
                    </div>
                    <br>
                    <div>
                        <a  href="searchPersonForm.php" class="waves-effect waves-light">
                            <i class="icon ti-id-badge"></i>
                            <span class="text">Add Other Details of Person</span>
                        </a>
                    </div>

                    <br>
                    <div>
                        <a  href="SearchForPotentialEmployeeForm.php" class="waves-effect waves-light">
                            <i class="icon ti-id-badge"></i>
                            <span class="text">Add Employee Details</span>
                        </a>
                    </div>

                    <br>
                    <div>
                        <a  href="searchForPotentialUserForm.php" class="waves-effect waves-light">
                            <i class="icon ti-id-badge"></i>
                            <span class="text">Add Users</span>
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