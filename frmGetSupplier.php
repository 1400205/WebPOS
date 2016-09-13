<?php
//session_start();

/*$ip=$_SESSION["ip"];
$timeout=$_SESSION ["timeout"];
if (!($ip==$_SERVER['REMOTE_ADDR'])){
    header("location: logout.php"); // Redirecting To Other Page
}

if($_SESSION ["timeout"]+1800 < time()){

    //session timed out
    header("location: logout.php"); // Redirecting To Other Page
}else{
    //reset session time
    $_SESSION['timeout']=time();
}*/
?>

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
include ("clsGetSupplier.php");

/*$ip=$_SESSION["ip"];
$timeout=$_SESSION ["timeout"];
if (!($ip==$_SERVER['REMOTE_ADDR'])){
    header("location: logout.php"); // Redirecting To Other Page
}*/

if($_SESSION ["timeout"]+1800 < time()){

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
    <title> Search For Supplier</title>


    <link rel="stylesheet" href="css/style-forms.css">
    
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Search for Supplier:</h1>
                <span>Enter Supplier  Name  to search Supplier.</span>
            </div>
            <fieldset>

                <br>
                <label>Supplier Name:</label><br>
                <input type="text" name="supplierName" id="first-choice" class="input username" placeholder="Enter Supplier Name To search" />  <br>



                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>

                </div>

            </fieldset>
            <div id="photolist">

                <?php echo $resultText;?><br>

                <div class="error"><span><a href="allPersons.html"> Click here to Exit this Task</a></a></span></div>

            </div>
            <div class="error"><span><?php echo $error;?></span></div>

        </div>
    </form>

</section>
</div>

</body>
</html>