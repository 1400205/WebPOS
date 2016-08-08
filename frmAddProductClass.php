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
    <title>Add Product Class Details></title>


    <link rel="stylesheet" href="css/style-forms.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){


            $("#first-choice").change(function() {
                $("#second-choice").load("clsGetProductTypeID.php?choice=" + $("#first-choice").val());

            });
            //$("#second-choice").hide();

           
        });
    </script>


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

                echo  "<select name='proType' id='first-choice' class='input username'>"."<br>";


                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $section=$row['0'];
                    //$sectionID=$row['1'];


                    echo '<option value="'.$section.'">'.trim($section).'</option>';

                }



                echo '</select>'


                ?>
                <Select name="proTypeID"id="second-choice" > </Select>


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