<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 27/07/2016
 * Time: 19:12
 */

//start session

//session_start();
//include ("clsAddBranch.php");
include ("myglobal.php");
//include ("clsGetProduct.php");
include ("clsAddSuppliedStuck.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Section Details></title>


    <link rel="stylesheet" href="css/style-forms.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){


            $("#first-choice").change(function() {
                $("#second-choice").load("clsGetsupplierID.php?choice=" + $("#first-choice").val());

            });
           // $("#second-choice").hide();

            //  $("#first-choice").change(function(){
            //  $("#second-choice").value=+ $("#first-choice").val());
            // });

            $("#shelfName").change(function() {
                $("#shelfID").load("clsGetShelfID.php?shelfName=" + $("#shelfName").val());

            });
           // $("#shelfID").hide();

            $("#taxName").change(function() {
                $("#taxID1").load("clsGetTaxID.php?tax1=" + $("#taxName").val());

            });
            // $("#taxID1").hide();

            $("#taxName2").change(function() {
                $("#taxID2").load("clsGetTaxID.php?tax1=" + $("#taxName2").val());

            });
            // $("#taxID2").hide();

            $("#discount").change(function() {
                $("#discountID").load("clsGetDiscountID.php?discount=" + $("#discount").val());

            });
            // $("#taxID2").hide();

        });
    </script>


</head>

<body>


<br><br>
<section>

    <?php

    // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    // echo '<select name="title">'; // Open your drop down box
    $productID=$_GET['id'];

    //prepare statement
    if($stmt=$sqlcon->prepare("SELECT partName FROM product WHERE productID=?")){
        //bind parameter
        $stmt->bind_param('i',$productID);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    }

    If($row=$result->fetch_row())
    {

        $resultText=$row['0'];
        //$sectionID=$row['1'];

    }



    echo '</select>'."<br>";


    ?>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Supplied Details for Product: <?php echo $resultText;?></h1>
                <span>This is to Enter Products Supplied: </span>
            </div>
            <fieldset>


                <label> Supplier Name:</label><br>
                <?php

                // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                // echo '<select name="title">'; // Open your drop down box
                $locationID=0;

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT supplierName FROM supplier")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }

                echo  "<select name='clocation' id='first-choice' class='input username'>"."<br>";


                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $section=$row['0'];
                    //$sectionID=$row['1'];


                    echo '<option value="'.$section.'">'.trim($section).'</option>';

                }



                echo '</select>'


                ?>



                <Select name="suppliedID"id="second-choice" >

                <pre>
             <option value="base">Please choose from above</option>
                </pre>

                </Select>
                <br>
                <label> Shelf Number:</label><br>
                <?php

                // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                // echo '<select name="title">'; // Open your drop down box
                $locationID=0;

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT shelveName FROM Shelve")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }

                echo  "<select name='shelfName' id='shelfName' class='input username'>"."<br>";


                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $section=$row['0'];
                    //$sectionID=$row['1'];


                    echo '<option value="'.$section.'">'.trim($section).'</option>';

                }



                echo '</select>'


                ?>



                <Select name="shelfID"id="shelfID" >

                <pre>
             <option value="base">Please choose from above</option>
                </pre>

                </Select>
                <br>

                <label>Quantity:</label><br>
                <input type="number" name="qty"  min="0" step="any" class="input username" placeholder="Enter Quantity"/>  <br>
                <label>Unit Cost Price:</label><br>
                <input type="number" min="0" step="any" name="costPrice" class="input username" placeholder="Enter Unit Cost Price"/>  <br>
                <label>Unit Selling Price:</label><br>
                <input type="number" min="0" step="any" name="sellPrice" class="input username" placeholder="Enter Unit Cost Price"/>  <br>

                <br>
                <label> Tax #1:</label><br>
                <?php

                $locationID=0;

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT taxName FROM Tax")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }

                echo  "<select name='taxName' id='taxName' class='input username'>"."<br>";


                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $section=$row['0'];

                    echo '<option value="'.$section.'">'.trim($section).'</option>';
                }

                echo '</select>'


                ?>



                <Select name="taxID1"id="taxID1" >

                <pre>
             <option value="base">Please choose from above</option>
                </pre>

                </Select>
                <br>

                <br>
                <label> Tax #2:</label><br>
                <?php

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT taxName FROM Tax")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }

                echo  "<select name='taxName2' id='taxName2' class='input username'>"."<br>";


                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $section=$row['0'];

                    echo '<option value="'.$section.'">'.trim($section).'</option>';
                }

                echo '</select>'


                ?>



                <Select name="taxID2"id="taxID2" >

                <pre>
             <option value="base">Please choose from above</option>
                </pre>

                </Select>
                <br>
                <label>Discount:</label><br>
                <?php

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT MAX(percentDiscountRate) FROM discount WHERE  status=1")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }

                echo  "<select name='discount' id='discount' class='input username'>"."<br>";


                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $section=$row['0'];
                    //$sectionID=$row['1'];


                    echo '<option value="'.$section.'">'.trim($section).'</option>';

                }



                echo '</select>'


                ?>
                <Select name="discountID"id="discountID" >


                </Select>
                <br>
                <label>Date Supplied:</label><br>
                <input type="date" name="dateSupplied" class="input username" placeholder="Enter Date Supplied"/>  <br>

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