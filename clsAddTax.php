<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 19:00
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

    $taxName = $_POST["taxname"];
    $taxRate = $_POST["taxRate"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["taxName"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Tax Name.');window.history.go(-1);</script>";
        $error = " Tax Name is Required.";
        exit;
    }

    elseif ( empty($_POST["taxRate"])){
        echo "<script>alert('Please enter Tax Rate.');window.history.go(-1);</script>";
        $error = "Tax Rate is Required.";
        exit;
    }
    elseif ($userid<1){

        $error = "<a href='index.php'>"."Please login before proceeding". "</a>";
    }

    else{

        //clean usser input

        //clean input user title
        $taxName = stripslashes( $taxName );
        $taxName=mysqli_real_escape_string($db,$taxName);
        $taxName = htmlspecialchars($taxName);
        $taxName = trim($taxName);
        //clean input user first name
        $taxRate = stripslashes( $taxRate );
        $taxRate=mysqli_real_escape_string($db,$taxRate);
        $taxRate = htmlspecialchars($taxRate);
        $taxRate = trim($taxRate);




        if ( ( $stmt=$mysqli->prepare("INSERT INTO tax (taxName, taxRate,userid) VALUES (?,?,?)"))){
            //bind parameter
            $stmt->bind_param('sdi',$taxName, $taxRate,$userid);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



