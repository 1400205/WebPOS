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
include ("clsTestXSS.php");


?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Get Product For Supplier</title>


    <link rel="stylesheet" href="css/style-forms.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            // $('#first-choice').bind('input',function(){
            //  $("#first-choice").load("clsproductintel.php?pName=" + $("#first-choice").val());

        });

        //  $("#first-choice").change(function(){
        //  $("#second-choice").value=+ $("#first-choice").val());
        // });

        });
    </script>
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Search for Product and Add Supplies:</h1>
                <span>Enter Product  Name  to search and Add Supplies.</span>
            </div>
            <fieldset>

                <br>
                <label>Product Nmae:</label><br>
                <input type="text" name="pName" id="first-choice" class="input username" placeholder="Enter Product To search" />  <br>



                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>

                </div>

            </fieldset>
            <div id="photolist">

                <?php echo $resultText;?><br>

                <h3> Product Description: </h3>
                <p>.......................</p>
                <?php echo $resultTextXSS;?><br>

                <div class="error"><span><a href="allPersons.html"> Click here to Exit this Task</a></a></span></div>

            </div>



            <div class="error"><span><?php echo $error;?></span></div>

        </div>
    </form>

</section>
</div>

</body>
</html>