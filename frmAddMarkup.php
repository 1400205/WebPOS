<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 20:10
 */
//session_start();
//include ("clsAddBranch.php");
include ("myglobal.php");

include ("clsAddMarkUp.php");

?>
<?php
//session_start();

$ip=$_SESSION["ip"];
$timeout=$_SESSION ["timeout"];
if (!($ip==$_SERVER['REMOTE_ADDR'])){
    header("location: logout.php"); // Redirecting To Other Page
}

if($_SESSION ["timeout"]+60 < time()){

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
    <title>Add Markup Details></title>


    <link rel="stylesheet" href="css/style-forms.css">





</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Markup Details:</h1>
                <span>This is to Enter Markup Details: </span>
            </div>
            <fieldset>

                <br>
                <label>Percentage Markup:</label><br>
                <input type="number" min="0" step="any"name="percentMarkup" class="input username" placeholder="Enter Percent Discount"/>  <br>
                <br>
                <label>Amount Markup:</label><br>
                <input type="number" min="0" step="any"  name="amountMarkup" class="input username" placeholder="Enter Amount Discount"/>  <br>



                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>


                </div>
                <div class="error"><span><?php echo $error;?></span></div>

            </fieldset>


        </div>
    </form>

</section>
</div>

</body>
</html>