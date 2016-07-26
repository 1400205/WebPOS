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
    <title>Add Branch Details></title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Branch Details:</h1>
                <span>Enter Branch Details: </span>
            </div>
            <fieldset>

                <br>
                <label>Branch Name:</label><br>
                <input type="text" name="cbranch" class="input username" placeholder="Enter Branch Name"/>  <br>
                <label> Telephone Number:</label><br>
                <input type="text" name="ctel" class="input username" placeholder="Telephone Number" />  <br>

                <label>Mobile Phone Number:</label><br>
                <input type="text" name="mobilephoneNo" class="input username" placeholder="Mobile Phone Number" /><br>
                <label>EmailAddress:</label><br>
                <input type="email" name="emailAddress" class="input username" placeholder="Email Address" />  <br>
                <label>Branch Address:</label><br>
                <input type="text" name="branchAddress" class="input username" placeholder="Company Address" /> <br>


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