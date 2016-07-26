<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 26/07/2016
 * Time: 21:28
 */

// Start the session
session_start();
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


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

    $proClass = $_POST["proClass"];



    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["proClass"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Product Class.');window.history.go(-1);</script>";
        $error = " Product Class is Required.";
        exit;
    }

    elseif ($userid<1){

        $error = "<a href='index.php'>"."Please login before proceeding". "</a>";
    }

    else{

        //clean usser input

        //clean input user title
        $proClass = stripslashes( $proClass );
        $proClass=mysqli_real_escape_string($db,$proClass);
        $proClass = htmlspecialchars($proClass);
        $proClass = trim($proClass);

        if ( ( $stmt=$mysqli->prepare("INSERT INTO proClassification (proClass,userid) VALUES (?,?)"))){
            //bind parameter
            $stmt->bind_param('sdi',$proClass, $userid);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



