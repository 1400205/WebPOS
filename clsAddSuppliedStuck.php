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
    $supplierID=$_GET["id"];
    $productID = $_POST["productID"];
    $qty = $_POST["qty"];
    $sellPrice = $_POST["sellPrice"];
    $costPrice = $_POST["costPrice"];
    $shelfID=$_POST["shelfID"];
    $taxID1=$_POST["taxID1"];
    $taxID2=$_POST["taxID2"];
    $discountID=$_POST["discount"];
    $markupID=$_POST["markup"];
    $suppliedDate = $_POST["dateSupplied"];
    $invoiceNumber=$_POST["invoiceNumber"];
    $reorderLevel=$_POST["reorderLevel"];



    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["clocation"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please Select Product.');window.history.go(-1);</script>";
        $error = "Product is Required.";
        exit;
    }

    elseif ( empty($_POST["qty"])){
        echo "<script>alert('Please enter Quantity.');window.history.go(-1);</script>";
        $error = "Quantity is Required.";
        exit;
    }
    elseif ( empty($_POST["sellPrice"])){
        echo "<script>alert('Please enter Selling Price.');window.history.go(-1);</script>";
        $error = "Selling Price is Required.";
        exit;
    }
    elseif ( empty($_POST["shelfID"])){
        echo "<script>alert('Please Select Shelf.');window.history.go(-1);</script>";
        $error = "Shelf is Required.";
        exit;
    }
    elseif ( empty($_POST["taxID1"])){
        echo "<script>alert('Please Select First Tax.');window.history.go(-1);</script>";
        $error = "First Tax is Required.";
        exit;
    }
    elseif ( empty($_POST["taxID2"])){
        echo "<script>alert('Please Select Second Tax.');window.history.go(-1);</script>";
        $error = "Second Tax is Required.";
        exit;
    }
    elseif ( empty($_POST["markup"]) ){
        echo "<script>alert('Please Select Markup.');window.history.go(-1);</script>";
        $error = "Markup is Required.";
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


        //clean input user surname
        $sellPrice = stripslashes( $sellPrice );
        $sellPrice=mysqli_real_escape_string($db,$sellPrice);
        $sellPrice = htmlspecialchars($sellPrice);
        $sellPrice = trim($sellPrice);

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

        //clean input
        $suppliedDate = stripslashes( $suppliedDate );
        $suppliedDate=mysqli_real_escape_string($db,$suppliedDate);
        $suppliedDate = htmlspecialchars($suppliedDate);
        $suppliedDate = trim($suppliedDate);
        //clean input
        $shelfID = stripslashes( $shelfID );
        $shelfID=mysqli_real_escape_string($db,$shelfID);
        $shelfID = htmlspecialchars($shelfID);
        $shelfID = trim($shelfID);

        //clean input
        $taxID1 = stripslashes( $taxID1 );
        $taxID1=mysqli_real_escape_string($db,$taxID1);
        $taxID1 = htmlspecialchars($taxID1);
        $taxID1 = trim($taxID1);

        //clean input
        $taxID2 = stripslashes( $taxID2 );
        $taxID2=mysqli_real_escape_string($db,$taxID2);
        $taxID2 = htmlspecialchars($taxID2);
        $taxID2 = trim($taxID2);

        //clean input
        $discountID = stripslashes( $discountID );
        $discountID=mysqli_real_escape_string($db,$discountID);
        $discountID = htmlspecialchars($discountID);
        $discountID = trim($discountID);

        //clean input
        $markupID = stripslashes( $markupID );
        $markupID=mysqli_real_escape_string($db,$markupID);
        $markupID = htmlspecialchars($markupID);
        $markupID = trim($markupID);
        //clean input
        $invoiceNumber = stripslashes( $invoiceNumber );
        $invoiceNumber=mysqli_real_escape_string($db,$invoiceNumber);
        $invoiceNumber = htmlspecialchars($invoiceNumber);
        $invoiceNumber = trim($invoiceNumber);
//clean input
        $reorderLevel = stripslashes( $reorderLevel );
        $reorderLevel=mysqli_real_escape_string($db,$reorderLevel);
        $reorderLevel = htmlspecialchars($reorderLevel);
        $reorderLevel = trim($reorderLevel);



        if ( ( $stmt=$mysqli->prepare("INSERT INTO suppliedStuck (supplierID, productID,stuckqty,sellPrice,costPrice,shelfID,
                                                    taxID1,taxID2,discount,markup,invoiceNumber,reorderLevel,
                                                    suppliedDate,userid) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('iidddiiiddsisi',$supplierID, $productID, $qty,$sellPrice,$costPrice,$shelfID,$taxID1,$taxID2,
                $discountID,$markupID,$invoiceNumber,$reorderLevel
                ,$suppliedDate, $userid);
            if( $stmt->execute()){
                $error="SUCCESS! "."Record Added Successfully.";
            }else{
                $error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



