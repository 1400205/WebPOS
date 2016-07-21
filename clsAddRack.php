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
    $sectionID=$_GET["id"];
    $rackName = $_POST["rack"];
    $shelveNo = $_POST["shelveNo"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["rack"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Rack Name.');window.history.go(-1);</script>";
        $error = "Rack Name is Required.";
        exit;
    }

    elseif ( empty($_POST["shelveNo"])){
        echo "<script>alert('Please enter Number of Shelves.');window.history.go(-1);</script>";
        $error = "Number of Shelves is Required.";
        exit;
    }

    else{

        //clean usser input

        //clean input user title
        $sectionID = stripslashes( $sectionID );
        $sectionID=mysqli_real_escape_string($db,$sectionID);
        $sectionID = htmlspecialchars($sectionID);
        $sectionID = trim($sectionID);
        //clean input user first name
        $rackName = stripslashes( $rackName );
        $rackName=mysqli_real_escape_string($db,$rackName);
        $rackName = htmlspecialchars($rackName);
        $rackName = trim($rackName);

        //clean input user surname
        $shelveNo = stripslashes( $shelveNo );
        $shelveNo=mysqli_real_escape_string($db,$shelveNo);
        $shelveNo = htmlspecialchars($shelveNo);
        $shelveNo = trim($shelveNo);



        if ( ( $stmt=$mysqli->prepare("INSERT INTO rack (rackName, numberOfShelves, sectionID,userid) VALUES (?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('siii',$rackName, $shelveNo, $sectionID,$userid);
            if( $stmt->execute()){
                $error="SUCCESS! "."Record Added Successfully.";
            }else{
                $error="FAILURE! "."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL Record Addition Failed: Contact Admin";}

    }




}



