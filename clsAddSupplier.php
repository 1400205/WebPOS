<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 05:43
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
    $personID=$_GET["id"];
    $supplierName = $_POST["supplier"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["supplier"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Supplier Name.');window.history.go(-1);</script>";
        $error = "Supplier Name is Required.";
        exit;
    }
    elseif ($userid<1){

        $error = "<a href='index.php'>"."Please login before proceeding". "</a>";
    }
    else{

        //clean usser input

        //clean input user title
        $personID = stripslashes( $personID );
        $personID=mysqli_real_escape_string($db,$rackID);
        $personID = htmlspecialchars($personID);
        $personID = trim($personID);
        //clean input user first name
        $supplierName = stripslashes( $supplierName );
        $supplierName=mysqli_real_escape_string($db,$supplierName);
        $supplierName = htmlspecialchars($supplierName);
        $supplierName = trim($supplierName);


        if ( ( $stmt=$mysqli->prepare("INSERT INTO supplier (supplierName, personID,userid) VALUES (?,?,?)"))){
            //bind parameter
            $stmt->bind_param('sii',$supplierName, $personID,$userid);
            if( $stmt->execute()){
                $error="SUCCESS! "."Record Added Successfully.";
            }else{
                $error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        }else{$error= "CALL Record Addition Failed: Contact Admin";}

    }




}



