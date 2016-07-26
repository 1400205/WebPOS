<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 11:08
 */
include ("myglobal.php");

include ("clsProducts.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Product Details></title>


    <link rel="stylesheet" href="css/style-forms.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){


            $("#pt").change(function() {
                $("#ptID").load("clsGetProductTypeID.php?choice=" + $("#pt").val());

            });
           // $("#ptID").hide();

           // $("#pt").change(function() {
            //    $("#pc").load("clsGetProductClass.php?id=" + $("#ptID").val());

           // });

            $("#pc").click(function() {
                $("#pc").load("clsGetProductClass.php?id=" + $("#ptID").val());

            });

        });
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

                <br>
                <label> Product Type:</label><br>
                <?php

                // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                // echo '<select name="title">'; // Open your drop down box

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT proType FROM productType ORDER BY proType")){

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
                <Select name="proClass"id="pc" class="input username">

                    <?php echo '<option value="'.$row1.'">'.$row1.'</option>';?>

                </Select>

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
                echo  "<select name='origin' class='input username'>";
                //$placeholdergender='Choose Gender';
                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $country=$row['0'];


                    echo '<option value="'.$country.'">'.$country.'</option>';

                }

                echo '</select>';

                ?>
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
                echo  "<select name='partPosition' class='input username'>";
                //$placeholdergender='Choose Gender';
                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $position=$row['0'];


                    echo '<option value="'.$position.'">'.$position.'</option>';

                }

                echo '</select>';

                ?>
                <br>

                <label>Product Description:</label><br>
                <textarea cols="56" rows="3" name="proDiscription" class="input username" placeholder="Enter Product Description">  </textarea><br>

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