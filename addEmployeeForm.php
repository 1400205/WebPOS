<?php

//start session

//session_start();
include ("myglobal.php");
include ("clsEmployee.php");
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
                    <h1>Add Employee:</h1>
                    <span>This page is for adding Employees</span>
                </div>
                <fieldset>
                    <legend> Employee Details</legend>



                    <br>
                    <label>Job Title:</label><br>
                    <?php

                    // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                    // echo '<select name="title">'; // Open your drop down box

                    //prepare statement
                    if($stmt=$sqlcon->prepare("SELECT jobtitle FROM jobtitles ORDER BY jobtitle")){

                        $stmt->execute();
                        //get result
                        $result = $stmt->get_result();
                    }
                    // echo "<select name='title'>";
                    echo  "<select name='jobtitle' class='input username'>";
                    //$placeholdergender='Choose Gender';
                    echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                    while($row=$result->fetch_row())
                    {

                        $jobtitle=$row['0'];


                        echo '<option value="'.$jobtitle.'">'.$jobtitle.'</option>';

                    }

                    echo '</select>';

                    ?>
                    <br>
                    <label>Date Hired:</label><br>
                    <input type="date" name="hiredDate" class="input username" placeholder="Hired Date" />  <br>


                    <div class="footer">
                        <input type="submit" id= "submit" class="button" name="submit" value="Submit" /><br>


                    </div>

                </fieldset>
                <div class="error"><span><?php echo $error;?></span></div>
            </div>
        </form>
    </div>

</section>
</div>

</body>
</html>