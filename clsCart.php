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

    $proID = $_POST["proID"];
    $transID = $_POST["transID"];
    $qty = $_POST["myqty"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["proID"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter product ID.');window.history.go(-1);</script>";
        $error = "Product ID is Required.";
        exit;
    }

    elseif ( empty($_POST["transID"])){
        echo "<script>alert('Please enter first transaction ID.');window.history.go(-1);</script>";
        $error = "Transaction ID Required.";
        exit;
    }
    elseif ( empty($_POST["myqty"])){
        echo "<script>alert('Please enter QTY.');window.history.go(-1);</script>";
        $error = "QTY is Required.";
        exit;
    }

    else{

        //clean usser input

        //clean input user title
        $proID = stripslashes( $proID );
        $proID=mysqli_real_escape_string($db,$proID);
        $proID = htmlspecialchars($proID);
        $proID = trim($proID);
        //clean input user first name
        $transID = stripslashes( $transID );
        $transID=mysqli_real_escape_string($db,$transID);
        $transID = htmlspecialchars($transID);
        $transID = trim($transID);

        //clean input user surname
        $qty = stripslashes( $qty );
        $qty=mysqli_real_escape_string($db,$qty);
        $qty = htmlspecialchars($qty);
        $qty = trim($qty);


        if ( ( $stmt=$mysqli->prepare("INSERT INTO cart (productID,qty,transactionID,userid) VALUES (?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('idii',$proID, $qty, $transID,$userid);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



