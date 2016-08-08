<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 06:44
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
    // $rackID=$_GET["id"];
    $productType = $_POST["prodcuctType"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["prodcuctType"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Type of Product.');window.history.go(-1);</script>";
        $error = "Type Of Product is Required.";
        exit;
    }
    elseif ($userid<1){

        $error = "<a href='index.php'>"."Please login before proceeding". "</a>";
    }
    else{

        //clean usser input


        //clean input user first name
        $productType = stripslashes( $productType );
        $productType=mysqli_real_escape_string($db,$productType);
        $productType = htmlspecialchars($productType);
        $productType = trim($productType);


        if ( ( $stmt=$mysqli->prepare("INSERT INTO productType (proType,userid) VALUES (?,?)"))){
            //bind parameter
            $stmt->bind_param('si',$productType,$userid);
            if( $stmt->execute()){
                $error="SUCCESS! "."Record Added Successfully.";
            }else{
                $error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        }else{$error= "CALL Record Addition Failed: Contact Admin";}

    }




}



