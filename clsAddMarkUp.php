<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 19:57
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

    $percentMarkup = $_POST["percentMarkup"];
    $amountMarkup = $_POST["amountMarkup"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["percentMarkup"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please Enter Percentage Markup.');window.history.go(-1);</script>";
        $error = " Percentage Markup is Required.";
        exit;
    }

    elseif ( empty($_POST["amountMarkup"])){
        echo "<script>alert('Please Enter Amount Markup.');window.history.go(-1);</script>";
        $error = "Amount Markup is Required.";
        exit;
    }
    elseif ($userid<1){

        $error = "<a href='index.php'>"."Please login before proceeding". "</a>";
    }

    else{

        //clean usser input

        //clean input user title
        $percentMarkup = stripslashes( $percentMarkup );
        $percentMarkup=mysqli_real_escape_string($db,$percentMarkup);
        $percentMarkup = htmlspecialchars($percentMarkup);
        $percentMarkup = trim($percentMarkup);
        //clean input user first name
        $amountMarkup = stripslashes( $amountMarkup );
        $amountMarkup=mysqli_real_escape_string($db,$amountMarkup);
        $amountMarkup = htmlspecialchars($amountMarkup);
        $amountMarkup = trim($amountMarkup);




        if ( ( $stmt=$mysqli->prepare("INSERT INTO markup (percentMarkup, amountMarkup,userid) VALUES (?,?,?)"))){
            //bind parameter
            $stmt->bind_param('sdi',$percentMarkup, $amountMarkup,$userid);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. Contact System Admin";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



