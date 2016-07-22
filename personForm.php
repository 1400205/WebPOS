<?php

//start session

//session_start();
include ("myglobal.php");
include ("clsPerson.php");
//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Add person</title>


    <link rel="stylesheet" href="css/style-forms.css">
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Person Details:</h1>
                <span>This page is for adding details of a person</span>
            </div>
            <fieldset>
                <label>Title:</label><br>

                    <?php

                   // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                   // echo '<select name="title">'; // Open your drop down box

                    //prepare statement
                    if($stmt=$sqlcon->prepare("SELECT titleName FROM Titles ORDER BY titleName")){

                        $stmt->execute();
                        //get result
                        $result = $stmt->get_result();
                    }
                   // echo "<select name='title'>";
                    echo  "<select name='title' class='input username'>";
                    //$placeholder='Choose Title';
                    echo '<option placeholder="'.$placeholder.'">'.$placeholder.'</option>';
                    while($row=$result->fetch_row())
                    {

                        $cdTitle=$row['0'];


                        echo '<option value="'.$cdTitle.'">'.$cdTitle.'</option>';

                    }

                    echo '</select>';

                    ?>
              <br>
                <label>First Name:</label><br>
                <input type="text" name="firstname" class="input username" placeholder="First Name" />  <br>

                <label>Surname:</label><br>
                <input type="text" name="surname" class="input username" placeholder="Surname" /><br>
                <label>Other Name(s):</label><br>
                <input type="text" name="othername" class="input username" placeholder="Other Name(s)" />  <br>
                <label>Gender:</label><br>
                <?php

               // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                // echo '<select name="title">'; // Open your drop down box

                //prepare statement
                if($stmt=$sqlcon->prepare("SELECT sex FROM gender ORDER BY sex")){

                    $stmt->execute();
                    //get result
                    $result = $stmt->get_result();
                }
                // echo "<select name='title'>";
                echo  "<select name='gender' class='input username'>";
                //$placeholdergender='Choose Gender';
                echo '<option placeholder="'.$placeholdergender.'">'.$placeholdergender.'</option>';
                while($row=$result->fetch_row())
                {

                    $cdgender=$row['0'];


                    echo '<option value="'.$cdgender.'">'.$cdgender.'</option>';

                }

                echo '</select>';

                ?>
                <br>
                <label>Date Of Birth:</label><br>
                <input type="date" name="dob" class="input username" placeholder="Date Of Birth" max=" 2000-01-01" />  <br><br>

                <div class="footer">
                    <input type="submit" id= "submit" class="button" name="submit" value="Login" /><br>


                </div>

            </fieldset>
            <div class="error"><span><?php echo $error;?></span></div>
            <div class="error"><span><a href="allPersons.html">Click to Exit this Task</a></a></span></div>

        </div>
    </form>

</section>
</div>

</body>
</html>