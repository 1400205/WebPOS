<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 21/07/2016
 * Time: 04:29
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
//$username= $_SESSION["uname"];
//$userid= $_SESSION["userid"];
//get connection
if(isset($_POST['addCart']))
{
   // $productID=$_POST['display_info'];

    $qty=$_POST['myqty'];
    $tranID=$_POST['transID'];
    $productID=$_POST['display_info'];
   $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

   /* if( empty($_POST["display_info"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please select Item.');window.history.go(-1);</script>";
        $error = "Item Selection is Required.";
        exit;
    }

    elseif ( empty($_POST["myqty"])){
        echo "<script>alert('Please enter Quantity.');window.history.go(-1);</script>";
        $error = "Quantity is Required.";
        exit;
    }
    elseif ( empty($_POST["proID"])){
        echo "<script>alert('Please Select Product.');window.history.go(-1);</script>";
        $error = "Product is Required.";
        exit;
    }

    else{*/

        //clean usser input

        //clean input user title
        $productID = stripslashes( $productID );
        $productID=mysqli_real_escape_string($db,$productID);
        $productID = htmlspecialchars($productID);
        $productID = trim($productID);


        $qty = stripslashes($qty);
        $qty = mysqli_real_escape_string($db, $qty);
        $qty = htmlspecialchars($qty);
        $qty = trim($qty);


        $tranID = stripslashes($tranID);
        $tranID = mysqli_real_escape_string($db, $tranID);
        $tranID = htmlspecialchars($tranID);
        $tranID = trim($tranID);



        if ( ( $stmt=$mysqli->prepare("INSERT INTO cart (productID, qty,transactionID) VALUES (?,?,?)"))){
            //bind parameter
            $stmt->bind_param('iis',$selctedProduct, $qty,$tranID);
            if( $stmt->execute()){
                $error="SUCCESS! "."Record Added Successfully.";
            }else{
                $error="FAILURE! "."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL Record Addition Failed: Contact Admin";}

   // }




}



