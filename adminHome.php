<?php
session_start();
?>
<?php
$username= $_SESSION["uname"];

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<a href="logout.php"> <li class="li">logout</li></ul> </a>
<div class="formbox">

    <br><br>
    <section>
        <form>
            <?php echo "Welcome: ". $username; ?>


            <fieldset>
                <legend><H2>WELCOME</H2></legend>
                <div id="container">

                    <div id="nav">
                        <h3><marquee direction="down"> <?php echo "User Name: ". $username.";"; ?>

                                WLECOME TO BJTS
                            </marquee>


                        </h3><br>
                        <h4>Add Records</h4>
                        <ul>
                            <a href="personForm.php">  <li>Add person</li></a>
                            <p></p>
                            <a href="searchPersonForm.php">  <li>Search For Person</li></a>
                            <p></p>
                            <a href="SearchForPotentialEmployeeForm.php">  <li>Search and Create Employee</li></a>
                            <p></p>
                            <a href="searchForPotentialUserForm.php">  <li>Search and Add User</li></a>
                            <p></p>
                            <a href="adminChangeBugStatus.php">  <li>Admin Approve Bug Changes</li></a>
                            <p></p>
                            <a href="changeBugStatus.php">  <li>User Change Bug Status</li></a>
                            <p></p>
                            <a href="upload.php">  <li>Attached File to Bug</li></a>
                        </ul>
                        <h4>View All</h4>
                        <ul>
                            <a href="mybuglist.php">  <li>View All Bugs</li></a>
                            <p></p>
                            <a href="fixedBugList.php">  <li>View Fixed Bugs</li></a>
                            <p></p>
                            <a href="unfixedBugs.php">  <li>View Unfixed Bugs</li></a>
                            <p></p>
                            <a href="commentedBugs.php">  <li>Bugs With Comments</li></a>

                        </ul>
                    </div>
                    <div id="main">


                    </div>
                    <dev id="footer">


                    </dev>
                </div>
</div>
</fieldset>
</form>


</section>
<div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</div>
</body>
</html>
