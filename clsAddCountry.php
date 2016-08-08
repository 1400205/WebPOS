<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 11:48
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
    $country = $_POST["country"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["country"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please Enter Country.');window.history.go(-1);</script>";
        $error = "Country is Required.";
        exit;
    }
    elseif ($userid<1){

        $error = "<a href='index.php'>"."Please login before proceeding". "</a>";
    }
    else{

        //clean usser input


        //clean input user first name
        $country = stripslashes( $country );
        $country=mysqli_real_escape_string($db,$country);
        $country = htmlspecialchars($country);
        $country = trim($country);


        if ( ( $stmt=$mysqli->prepare("INSERT INTO country (countryName,userid) VALUES (?,?)"))){
            //bind parameter
            $stmt->bind_param('si',$country,$userid);
            if( $stmt->execute()){
                $error="SUCCESS! "."Record Added Successfully.";
            }else{
                $error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        }else{$error= "CALL Record Addition Failed: Contact Admin";}

    }




}



