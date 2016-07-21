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
$username= $_SESSION["uname"];
$userid= $_SESSION["userid"];
//get connection
if(isset($_POST['submit']))
{
    //get user inputs
    $branchID=$_GET["id"];
    $sectionName = $_POST["cSection"];
    $location = $_POST["clocation"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["cSection"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Section Name.');window.history.go(-1);</script>";
        $error = "Section Name is Required.";
        exit;
    }

    elseif ( empty($_POST["clocation"])){
        echo "<script>alert('Please enter Location.');window.history.go(-1);</script>";
        $error = "Location is Required.";
        exit;
    }

    else{

        //clean usser input

        //clean input user title
        $branchID = stripslashes( $branchID );
        $branchID=mysqli_real_escape_string($db,$branchID);
        $branchID = htmlspecialchars($branchID);
        $branchID = trim($branchID);
        //clean input user first name
        $sectionName = stripslashes( $sectionName );
        $sectionName=mysqli_real_escape_string($db,$sectionName);
        $sectionName = htmlspecialchars($sectionName);
        $sectionName = trim($sectionName);

        //clean input user surname
        $location = stripslashes( $location );
        $location=mysqli_real_escape_string($db,$location);
        $location = htmlspecialchars($location);
        $location = trim($location);



        if ( ( $stmt=$mysqli->prepare("INSERT INTO section (sectionName, sectionType, branchID,userid) VALUES (?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('ssii',$sectionName, $location, $branchID,$userid);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



