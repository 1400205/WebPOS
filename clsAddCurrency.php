<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 15:23
 */

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

    $currency = $_POST["currency"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["currency"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Currency.');window.history.go(-1);</script>";
        $error = "Currency is Required.";
        exit;
    }
    elseif ($userid<1){

        $error = "<a href='index.php'>"."Please login before proceeding". "</a>";
    }
    else{

        //clean usser input

        //clean input user title
        $currency = stripslashes( $currency );
        $currency=mysqli_real_escape_string($db,$currency);
        $currency = htmlspecialchars($currency);
        $currency = trim($currency);
        //clean input user first name

        if ( ( $stmt=$mysqli->prepare("INSERT INTO TradeCurrency(currency,userid) VALUES (?,?)"))){
            //bind parameter
            $stmt->bind_param('si',$currency,$userid);
            if( $stmt->execute()){
                $error="SUCCESS! "."Record Added Successfully.";
            }else{
                $error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }

    }




}



