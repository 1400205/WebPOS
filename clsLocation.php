<?php
// Start the session
session_start();
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 11/06/2016
 * Time: 15:37
 */
//get connection string
include ("connect.php");
//get global variable file
include ("myglobal.php");
//get user session name and id
$username= $_SESSION["uname"];
$userid= $_SESSION["userid"];
//get connection
if(isset($_POST['submit']))
{
    //get user inputs

    $location = $_POST["clocation"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["clocation"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Location Name Name.');window.history.go(-1);</script>";
        $error = "Loacation Name is Required.";
        exit;
    }



    else{

        //clean usser input

        //clean input user title
        $location = stripslashes( $location );
        $location=mysqli_real_escape_string($db,$location);
        $location = htmlspecialchars($location);
        $location = trim($location);
        //clean input user first name


        if ( ( $stmt=$mysqli->prepare("INSERT INTO locationDetails (locationName) VALUES (?)"))){
            //bind parameter
            $stmt->bind_param('s',$location);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL failed";}

    }




}



