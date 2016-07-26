<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 26/07/2016
 * Time: 21:34
 */
//session_start();
//include ("clsAddBranch.php");
include ("myglobal.php");

include ("clsProductClass.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Product Class Details></title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Product Class Details:</h1>
                <span>Enter Product Class Details: </span>
            </div>
            <fieldset>
                <br>
                <label> Product Type:</label><br>
                <?php

                // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                // echo '<select name="title">'; // Open your drop down box
                $locationID=0;

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT proType FROM productType WHERE  status=1")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }

                echo  "<select name='currencyID1' id='first-choice1' class='input username'>"."<br>";


                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $section=$row['0'];
                    //$sectionID=$row['1'];


                    echo '<option value="'.$section.'">'.trim($section).'</option>';

                }



                echo '</select>'


                ?>
                <Select name="currencyID2"id="second-choice1" > </Select>


                <br>
                <label>Product Class:</label><br>
                <input type="text" name="proClass" class="input username" placeholder="Enter Product Class"/>  <br>

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