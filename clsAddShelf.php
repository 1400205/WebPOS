<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 21/07/2016
 * Time: 17:33
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
    $rackID=$_GET["id"];
    $shelfName = $_POST["shelf"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["shelf"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Shelf Name.');window.history.go(-1);</script>";
        $error = "Rack Name is Required.";
        exit;
    }

    else{

        //clean usser input

        //clean input user title
        $rackID = stripslashes( $rackID );
        $rackID=mysqli_real_escape_string($db,$rackID);
        $rackID = htmlspecialchars($rackID);
        $rackID = trim($rackID);
        //clean input user first name
        $shelfName = stripslashes( $shelfName );
        $shelfName=mysqli_real_escape_string($db,$shelfName);
        $shelfName = htmlspecialchars($shelfName);
        $shelfName = trim($shelfName);


        if ( ( $stmt=$mysqli->prepare("INSERT INTO shelve (shelveName, rackID,userid) VALUES (?,?,?)"))){
            //bind parameter
            $stmt->bind_param('sii',$shelfName, $rackID,$userid);
            if( $stmt->execute()){
                $error="SUCCESS! "."Record Added Successfully.";
            }else{
                $error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        }else{$error= "CALL Record Addition Failed: Contact Admin";}

    }




}



