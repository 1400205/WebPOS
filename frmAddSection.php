<?php

//start session

//session_start();
//include ("clsAddBranch.php");
include ("myglobal.php");

include ("clsBranch.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Section Details></title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Section Details:</h1>
                <span>Enter Branch Details: </span>
            </div>
            <fieldset>

                <br>
                <label>Section Name:</label><br>
                <input type="text" name="cSection" class="input username" placeholder="Enter Section Name"/>  <br>
                <label> Section Location:</label><br>
                <?php

                // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                // echo '<select name="title">'; // Open your drop down box

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT locationName FROM locationDetails ORDER BY locationName")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }
                // echo "<select name='title'>";
                echo  "<select name='Section' class='input username'>";
                //$placeholdergender='Choose Gender';
                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $section=$row['0'];


                    echo '<option value="'.$section.'">'.$section.'</option>';

                }

                echo '</select>';

                ?>
                <br>


                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>
                    <div class="error"><span><?php echo $error;?></span></div>


                </div>

            </fieldset>


        </div>
    </form>

</section>
</div>

</body>
</html>