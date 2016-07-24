<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 00:32
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
    $productID=$_GET["id"];
    $suppierID=$_POST["supplierID"];
    $costPrice=$_POST["costPrice"];
    $currencyID=$_POST["currencyID"];
    $qty=$_POST["qty"];
   $suppliedDate= $_POST["suppliedDate"];




    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["supplierID"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please Choose Supplier.');window.history.go(-1);</script>";
        $error = "Supplier Name is Required.";
        exit;
    }

    elseif ( empty($_POST["costPrice"])){
        echo "<script>alert('Please enter Cost Price.');window.history.go(-1);</script>";
        $error = "Cost Price is Required.";
        exit;
    }
    elseif ( empty($_POST["currencyID"])){
        echo "<script>alert('Please Select Currency.');window.history.go(-1);</script>";
        $error = "Currency is Required.";
        exit;
    }
    elseif ( empty($_POST["$qty"])){
        echo "<script>alert('Please Enter Quantity.');window.history.go(-1);</script>";
        $error = "Quantity is Required.";
        exit;
    }

    elseif ( empty($_POST["suppliedDate"])){
        echo "<script>alert('Please Enter Supplied Date.');window.history.go(-1);</script>";
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
        $suppierID = stripslashes( $suppierID );
        $suppierID=mysqli_real_escape_string($db,$suppierID);
        $suppierID = htmlspecialchars($suppierID);
        $suppierID = trim($suppierID);

        //clean input user surname
        $costPrice = stripslashes( $costPrice );
        $costPrice=mysqli_real_escape_string($db,$costPrice);
        $costPrice = htmlspecialchars($costPrice);
        $costPrice = trim($costPrice);

        //clean input user title
        $currencyID = stripslashes( $currencyID );
        $currencyID=mysqli_real_escape_string($db,$currencyID);
        $currencyID = htmlspecialchars($currencyID);
        $currencyID = trim($currencyID);
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



        if ( ( $stmt=$mysqli->prepare("INSERT INTO section (sectionName, sectionType, branchID,userid) VALUES (?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('siii',$sectionName, $location, $branchID,$userid);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



