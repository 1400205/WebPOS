<?php
// Start the session
session_start();
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 11/06/2016
 * Time: 15:37
 */
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

    $employeeID= $_GET['id'];
    $newUserName = $_POST["username"];
    $password = $_POST["password"];
   

    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if($employeeID<1)//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please select a valid Employee.');window.history.go(-1);</script>";
        $error = "Valid person is Required.";
        exit;
    }

    elseif ( $userid<0){
        echo "<script>alert('Please login as registered user.');window.history.go(-1);</script>";
        $error = "Valid user login in is required.";
        exit;
    }
    elseif ( empty($_POST["username"])){
        echo "<script>alert('Please enter User Name For New User.');window.history.go(-1);</script>";
        $error = "User Name is Required.";
        exit;
    }

    //elseif ( empty($_POST["dob"])){ $error = "Date of Birth is Required.";}

    elseif ( empty($_POST["password"])){
        echo "<script>alert('Please enter Password For New User.');window.history.go(-1);</script>";
        $error = "Password is Required.";
        exit;}
    elseif ( ($_POST["password"])<>($_POST["passwordcon"])){
        echo "<script>alert('Please password and password confirmation does not match.');window.history.go(-1);</script>";
        $error = "Both password and password confirmation must match.";
        exit;}

    else{

        //clean usser input person id

        $employeeID = stripslashes( $employeeID );
        $employeeID=mysqli_real_escape_string($db,$employeeID);
        $employeeID = htmlspecialchars($employeeID);
        $employeeID = trim($employeeID);

        //clean input address1
        $newUserName = stripslashes( $newUserName );
        $newUserName=mysqli_real_escape_string($db,$newUserName);
        $newUserName = htmlspecialchars($newUserName);
        $newUserName = trim($newUserName);
        //clean input addressline 2

        if ( ( $stmt=$mysqli->prepare("INSERT INTO webpos_user (employeeID,username, password) VALUES (?,?,?)"))){
            //bind parameter
            $stmt->bind_param('iss',$employeeID, $newUserName, $password);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



