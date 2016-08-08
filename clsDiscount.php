<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 19:26
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

    $percentDiscount = $_POST["percentDiscount"];
    $amountDicount = $_POST["amountDiscount"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["percentDiscount"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please Enter Percentage Discount.');window.history.go(-1);</script>";
        $error = " Percentage Discount is Required.";
        exit;
    }

    elseif ( empty($_POST["amountDiscount"])){
        echo "<script>alert('Please Enter Amount Discount.');window.history.go(-1);</script>";
        $error = "Amount Discount is Required.";
        exit;
    }
    elseif ($userid<1){

        $error = "<a href='index.php'>"."Please login before proceeding". "</a>";
    }

    else{

        //clean usser input

        //clean input user title
        $percentDiscount = stripslashes( $percentDiscount );
        $percentDiscount=mysqli_real_escape_string($db,$percentDiscount);
        $percentDiscount = htmlspecialchars($percentDiscount);
        $percentDiscount = trim($percentDiscount);
        //clean input user first name
        $amountDicount = stripslashes( $amountDicount );
        $amountDicount=mysqli_real_escape_string($db,$amountDicount);
        $amountDicount = htmlspecialchars($amountDicount);
        $amountDicount = trim($amountDicount);




        if ( ( $stmt=$mysqli->prepare("INSERT INTO discount (percentDiscountRate, amountDiscounRatet,userid) VALUES (?,?,?)"))){
            //bind parameter
            $stmt->bind_param('sdi',$percentDiscount, $amountDicount,$userid);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



