<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 06:25
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
    $partPosition = $_POST["partPosition"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["partPosition"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Part Position.');window.history.go(-1);</script>";
        $error = "Part Position is Required.";
        exit;
    }
    elseif ($userid<1){

        $error = "<a href='index.php'>"."Please login before proceeding". "</a>";
    }
    else{

        //clean usser input


        //clean input user first name
        $partPosition = stripslashes( $partPosition );
        $partPosition=mysqli_real_escape_string($db,$partPosition);
        $partPosition = htmlspecialchars($partPosition);
        $partPosition = trim($partPosition);


        if ( ( $stmt=$mysqli->prepare("INSERT INTO positions (partPosition,userid) VALUES (?,?)"))){
            //bind parameter
            $stmt->bind_param('si',$partPosition,$userid);
            if( $stmt->execute()){
                $error="SUCCESS! "."Record Added Successfully.";
            }else{
                $error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        }else{$error= "CALL Record Addition Failed: Contact Admin";}

    }




}



