<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 16:33
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
$date = date('Y-m-d H:i:s');
//get connection
if(isset($_POST['submit']))
{
    //get user inputs
    $productID=$_GET["id"];
    $currencyID= $_POST["currencyID2"];
    $supplierID = $_POST["suppliedID"];
    $costPrice = $_POST["costPrice"];
    $qty = $_POST["qty"];
    $suppliedDate = $_POST["dateSupplied"];



    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["clocation"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please Select.');window.history.go(-1);</script>";
        $error = "Supplier is Required.";
        exit;
    }

    elseif ( empty($_POST["qty"])){
        echo "<script>alert('Please enter Quantity.');window.history.go(-1);</script>";
        $error = "Quantity is Required.";
        exit;
    }
    elseif ( empty($_POST["costPrice"])){
        echo "<script>alert('Please enter Cost Price.');window.history.go(-1);</script>";
        $error = "Cost Price is Required.";
        exit;
    }
    elseif ( empty($_POST["currencyID1"])){
        echo "<script>alert('Please Select Currency.');window.history.go(-1);</script>";
        $error = "Currency is Required.";
        exit;
    }
    elseif ( empty($_POST["dateSupplied"]) ){
        echo "<script>alert('Please Enter Supplied Date.');window.history.go(-1);</script>";
        $error = "Supplied Date is Required.";
        exit;
    }
    elseif (( $_POST["dateSupplied"]) > $date) {
        echo "<script>alert('Supplied Date Cannot be Greater than Today.');window.history.go(-1);</script>";
        $error = "Supplied Date is Required.";
        exit;
    }


    elseif ($userid<1){

        $error = "<a href='index.php'>"."Please login before proceeding". "</a>";
    }

    else{

        //clean usser input

        //clean input user title
        $productID = stripslashes( $productID );
        $productID=mysqli_real_escape_string($db,$productID);
        $productID = htmlspecialchars($productID);
        $productID = trim($productID);
        //clean input user first name
        $currencyID = stripslashes( $currencyID );
        $currencyID=mysqli_real_escape_string($db,$currencyID);
        $currencyID = htmlspecialchars($currencyID);
        $currencyID = trim($currencyID);

        //clean input user surname
        $supplierID = stripslashes( $supplierID );
        $supplierID=mysqli_real_escape_string($db,$supplierID);
        $supplierID = htmlspecialchars($supplierID);
        $supplierID = trim($supplierID);

        //clean input user title
        $costPrice = stripslashes( $costPrice );
        $costPrice=mysqli_real_escape_string($db,$costPrice);
        $costPrice = htmlspecialchars($costPrice);
        $costPrice = trim($costPrice);
        //clean input user first name
        $qty = stripslashes( $qty );
        $qty=mysqli_real_escape_string($db,$qty);
        $qty = htmlspecialchars($qty);
        $qty = trim($qty);

        //clean input user surname
        $suppliedDate = stripslashes( $suppliedDate );
        $suppliedDate=mysqli_real_escape_string($db,$suppliedDate);
        $suppliedDate = htmlspecialchars($suppliedDate);
        $suppliedDate = trim($suppliedDate);



        if ( ( $stmt=$mysqli->prepare("INSERT INTO suppliedProduct (supplierID, productID, currencyID,costPrice,qty,supliedDate,userid) VALUES (?,?,?,?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('iiidisi',$supplierID, $productID, $currencyID,$costPrice,$qty,$suppliedDate, $userid);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



