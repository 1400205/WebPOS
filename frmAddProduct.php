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
 * Time: 11:08
 */
//require 'clsAntiCSRF.php';

include ("clsProducts.php");
include ("myglobal.php");


$_SESSION['_token']=bin2hex(openssl_random_pseudo_bytes(16));
$ip=$_SESSION["ip"];
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
}

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Product Details></title>


    <link rel="stylesheet" href="css/style-forms.css">

<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->

    <script src="jq/jquery-3.1.0.js"/>


    <link href="dist/css/select2.min.css" rel="stylesheet" />


    <script src="dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function(){


            $("#pt").change(function() {
                $("#ptID").load("clsGetProductTypeID.php?choice=" + $("#pt").val(),
                    function(){
                        $("#pc").load("clsGetProductClass.php?id=" + $("#ptID").val());
                    });

            });
            
            $("#ptID").hide();

           // $("#pt").change(function() {
            //    $("#pc").load("clsGetProductClass.php?id=" + $("#ptID").val());

           // });


            //$("#pc").click(function() {


                //$("#pc").load("textdata/" + $(this).val() + ".txt");


            //});

            $("#pc").change(function() {
                $("#pcID").load("clsGetProductClassID.php?choiceClass=" + $("#pc").val());

            });
            $("#pcID").hide();

            $("#origin1").change(function() {
                $("#originID").load("getCountryID.php?country=" + $("#origin1").val());

            });

            $("#originID").hide();

            $("#partPosition").change(function() {
                $("#positionID").load("clsGetPositionID.php?position=" + $("#partPosition").val());

            });
            $("#positionID").hide();
        });
    </script>

    <script>
       // function someFunc(){
           // var myindex  = dropdown.selectedIndex;// This prints correctly
           // alert("Index : "+document.getElementById("pc").selectedIndex);// This is always 0 no metter what selects
       // }
    </script>

</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Product Details:</h1>
                <span>This is to Enter Product Details: </span>
            </div>
            <fieldset>
                <input type="hidden" name="_token" value=<?php echo  $_SESSION['_token'];?> >  <br>

                <br>
                <label> Product Type:</label><br>
                <?php

                // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                // echo '<select name="title">'; // Open your drop down box

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT proType FROM productType")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }
                // echo "<select name='title'>";
                echo  "<select name='prodcuctType'id='pt' class='input username'>";
                //$placeholdergender='Choose Gender';
                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {
                    $productType=$row['0'];
                    echo '<option value="'.$productType.'">'.$productType.'</option>';
                }

                echo '</select>';

                ?>
                <Select name="proTypeID"id="ptID" > </Select>
                <br>
                <label>Product Name:</label><br>
                <input type="text" name="partName" class="input username" placeholder="Enter Part Name"/>  <br>

                <br>

                <label> Product Class:</label><br>
                <?php

                // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                // echo '<select name="title">'; // Open your drop down box

                //prepare statement

                echo  "<select name='proClass'id='pc' class='input username'>";
                //$placeholdergender='Choose Gender';
                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';


                    echo '<option selected="selected" value="'.$resultText.'">'.$resultText.'</option>';
               echo '<pre>'.'<option value="base">Please choose from above</option>' .'</pre>';


                echo '</select>';
                ?>

                <Select name="proClassID"id="pcID"> </Select>

                <br>

                <label>Part Number:</label><br>
                <input type="text" name="partNumber" class="input username" placeholder="Enter Part Number"/>  <br>

                <label>BarCode:</label><br>
                <input type="text" name="barcode" class="input username" placeholder="Scan Barcode"/>  <br>

                <label>OEM Reference:</label><br>
                <input type="text" name="OEM" class="input username" placeholder="Enter OEM Reference"/>  <br>

                <label>Country Of Origin:</label><br>
                <?php

                // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                // echo '<select name="title">'; // Open your drop down box

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT countryName FROM country ORDER BY countryName")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }
                // echo "<select name='title'>";
                echo  "<select name='origin'id='origin1' class='input username'>";
                //$placeholdergender='Choose Gender';
                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $country=$row['0'];


                    echo '<option value="'.$country.'">'.$country.'</option>';

                }

                echo '</select>';

                ?>
                <Select name="originID"id="originID" > </select>
                <br>

                <label>Part Position:</label><br>

                <?php

                // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                // echo '<select name="title">'; // Open your drop down box

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT partPosition FROM positions ORDER BY partPosition")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }
                // echo "<select name='title'>";
                echo  "<select name='partPosition' id='partPosition' class='input username'>";
                //$placeholdergender='Choose Gender';
                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $position=$row['0'];


                    echo '<option value="'.$position.'">'.$position.'</option>';

                }

                echo '</select>';

                ?>
                <Select name="positionID" id="positionID" > </select>
                <br>

                <label>Product Description:</label><br>
                <textarea cols="56" rows="3" name="proDescription" class="input username" placeholder="Enter Product Description">  </textarea><br>

                <br>

                <label>Remark:</label><br>
                <textarea cols="56" rows="3" name="remark" class="input username" placeholder="Enter Any Remark eg. other Part Numbers">  </textarea><br>


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