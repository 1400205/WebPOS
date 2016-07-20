<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 20/07/2016
 * Time: 20:49
 */


//start session

//session_start();
include ("myglobal.php");
include ("getCompany.php");

//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Company Details</title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>

<div id="photolist">



</div>
<br><br>


<section>
    <?php echo $resultText;?><br>
    <?php echo $resultTextPhoto;?><br>
   

</section>
</div>

</body>
</html>