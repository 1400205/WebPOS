
<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 06:31
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

include ("myTrans.php");

?>

<?php
session_start();

//$ip=$_SESSION["ip"];
//$timeout=$_SESSION ["timeout"];
//if (!($ip==$_SERVER['REMOTE_ADDR'])){
//    header("location: logout.php"); // Redirecting To Other Page
//}

/*if($_SESSION ["timeout"]+60 < time()){

    //session timed out
    header("location: logout.php"); // Redirecting To Other Page
}else{
    //reset session time
    $_SESSION['timeout']=time();
}*/
?>



<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Get Transaction></title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Transactions:</h1>
                <span>Get Transaction Details: </span>
            </div>
            <fieldset>

                <br>
                <label>Transaction ID:</label><br>
                <input type="text" name="transID" class="input username" placeholder="Enter Trans ID"/>  <br>

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