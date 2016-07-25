<?php

//start session

//session_start();
//include ("clsAddBranch.php");
include ("myglobal.php");
//include ("clsGetProduct.php");
include ("clsAddSection.php");

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
                $("#second-choice").load("clsGetLocationID.php?choice=" + $("#first-choice").val());

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
                <h1>Add Product Details for: <?php echo $resultText;?></h1>
                <span>This is to Enter Products Supplied: </span>
            </div>
            <fieldset>

                <br>
                <label>Section Name:</label><br>
                <input type="text" name="cSection" class="input username" placeholder="Enter Section Name"/>  <br>
                <label> Section Location:</label><br>
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



                echo '</select>'."<br>";


                ?>

                <br>
                <label>Location ID:</label><br>

                <Select name="locationID"id="second-choice" class="input username">

                <pre>
             <option value="base">Please choose from above</option>
                </pre>

                </Select>
                <br>


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