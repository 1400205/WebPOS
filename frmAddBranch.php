<?php

//start session

//session_start();
//include ("myglobal.php");
include ("getCompany.php");

//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Company Details</title>


    <link rel="stylesheet" href="css/style-forms.css">


</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="" enctype="multipart/form-data">
        <div class="content">
            <div class="header">
                <h1>Add Company Details:</h1>
                <span>Enter company name and upload logo</span>
            </div>
            <fieldset>

                <br>
                <label>Company Name:</label><br>
                <input type="text" name="company" class="input username" placeholder="Enter Company Name"/>  <br>
                <label> Telephone Number:</label><br>
                <input type="tel" name="tel" class="input username" placeholder="Telephone Number" />  <br>

                <label>Mobile Phone Number:</label><br>
                <input type="tel" name="mobilephoneNo" class="input username" placeholder="Mobile Phone Number" /><br>
                <label>EmailAddress:</label><br>
                <input type="email" name="emailAddress" class="input username" placeholder="Email Address" />  <br>
                <label>Branch Address:</label><br>
                <textarea name="Address" class="input username" placeholder="Company Address" col="30"rows="4">  <br>


                <div class="footer">
                    <input type="submit" class="button" name="submit" value="Submit" /><br>
                    <div class="error"><span><?php echo $msg;?></span></div>

                </div>

            </fieldset>


        </div>
    </form>

</section>
</div>

</body>
</html>