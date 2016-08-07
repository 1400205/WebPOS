
<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 21/07/2016
 * Time: 15:53
 */

//start session

//session_start();
//include ("clsAddBranch.php");
include ("myglobal.php");

include ("clsAddRack.php");

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
    <title>Add Rack Details></title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Rack Details:</h1>
                <span>Enter Rack Details: </span>
            </div>
            <fieldset>

                <br>
                <label>Rack Name:</label><br>
                <input type="text" name="rack" class="input username" placeholder="Enter Rack Name"/>  <br>
                <label> Number of Shelves:</label><br>
                <input type="number" name="shelveNo" class="input username" placeholder="Enter Number of Shelves" />  <br>
                

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