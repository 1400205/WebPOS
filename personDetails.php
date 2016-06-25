<?php

//start session

//session_start();
include ("myglobal.php");
//include ("clsPerson.php");
//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Login</title>


    <link rel="stylesheet" href="css/style-forms.css">
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Address Of Person:</h1>
                <span>This page is for adding Address  of a person</span>
            </div>
            <fieldset>

                <label>Address Line1:</label><br>
                <input type="text" name="addressline1" class="input username" placeholder="Address line1" />  <br>

                <label>Address Line2:</label><br>
                <input type="text" name="addressline2" class="input username" placeholder="Address line2" /><br>
                <label>Postal Code/Box:</label><br>
                <input type="text" name="box" class="input username" placeholder="Postal Code/Box" />  <br>
                <label>Town:</label><br>
                <input type="text" name="town" class="input username" placeholder="Add Town" />  <br><br>

                <br>
                <label>Region/County:</label><br>
                <input type="text" name="region" class="input username" placeholder="Region/County" />  <br><br>
                <br>
                <label>Country:</label><br>
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
                echo  "<select name='country' class='input username'>";
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

                <div class="footer">
                    <input type="submit" id= "submit" class="button" name="submit" value="Submit" /><br>
                    <div class="error"><span><?php echo $error;?></span></div>

                </div>

            </fieldset>
        </div>
    </form>

</section>
</div>

</body>
</html>