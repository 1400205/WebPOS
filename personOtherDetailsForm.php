<?php

//start session

//session_start();
include ("myglobal.php");
include ("clsAddress.php");
//include ("connect.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Login</title>


    <link rel="stylesheet" href="css/style-forms.css">
    <link rel="stylesheet" href="css/stylelegend.css">
</head>

<body>


<br><br>
<section>
    <div class="tableBox">
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Address Of Person:</h1>
                <span>This page is for adding Address  of a person</span>
            </div>
            <fieldset>
                <legend> Adderess Details</legend>

                <label>Address Line1:</label><br>
                <input type="text" name="addressline1" class="input username" placeholder="Address line1" />  <br>

                <label>Address Line2:</label><br>
                <input type="text" name="addressline2" class="input username" placeholder="Address line2" /><br>
                <label>Postal Code/Box:</label><br>
                <input type="text" name="postBox" class="input username" placeholder="Postal Code/Box" />  <br>
                <label>Town:</label><br>
                <input type="text" name="town" class="input username" placeholder="Add Town" />  <br><br>

                <br>
                <label>Region/County:</label><br>
                <?php

                // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                // echo '<select name="title">'; // Open your drop down box

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT regionName FROM region ORDER BY regionName")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }
                // echo "<select name='title'>";
                echo  "<select name='region' class='input username'>";
                //$placeholdergender='Choose Gender';
                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $region=$row['0'];


                    echo '<option value="'.$region.'">'.$region.'</option>';

                }

                echo '</select>';

                ?>

                <label>Home Telephone Number:</label><br>
                <input type="tel" name="hometel" class="input username" placeholder="Home telephone Number" />  <br>

                <label>Mobile Phone Number:</label><br>
                <input type="tel" name="mobilephoneNo" class="input username" placeholder="Mobile Phone Number" /><br>
                <label>EmailAddress:</label><br>
                <input type="email" name="emailAddress" class="input username" placeholder="Email Address" />  <br>
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
        </div>

</section>
</div>

</body>
</html>