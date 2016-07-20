<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 20/07/2016
 * Time: 23:29
 */

// Start the session
session_start();
//get user session name and id
$username= $_SESSION["uname"];
$userid= $_SESSION["userid"];
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//get connection string
include ("connect.php");
//get global variable file
include ("myglobal.php");

//get connection
if(isset($_POST['submit']))
{
    //get user inputs

    $companyID = $_GET['id'];
    $branchname = $_POST["branch"];
    $tel = $_POST["tel"];


    $mobile = $_POST["mobilephoneNo"];
    $email = $_POST["emailAddress"];
    $branchAddress=$_POST["branchAddress"];

    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if($companyID<1)//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please select a valid company.');window.history.go(-1);</script>";
        $error = "Valid company is Required.";
        exit;
    }

    elseif ( $userid<0){
        echo "<script>alert('Please login as registered user.');window.history.go(-1);</script>";
        $error = "Valid user login in is required.";
        exit;
    }
    elseif ( empty($_POST["branch"])){
        echo "<script>alert('Please enter Branch of company.');window.history.go(-1);</script>";
        $error = "Branch is Required.";
        exit;
    }

    //elseif ( empty($_POST["dob"])){ $error = "Date of Birth is Required.";}

    elseif ( empty($_POST["tel"])  &&  empty($_POST["mobilephoneNo"])){
        echo "<script>alert('Please enter at least either telephone number or Mobile phone of company.');window.history.go(-1);</script>";
        $error = "Either telephone number or mobile phone number of company is Required.";
        exit;}

    elseif ( empty($_POST["branchAddress"])){
        echo "<script>alert('Please Enter Branch Address.');window.history.go(-1);</script>";
        $error = "Branch Address is required  is Required.";
        exit;
    }
    elseif ( empty($_POST["emailAddress"])){
        echo "<script>alert('Please enter Email Address of Branch.');window.history.go(-1);</script>";
        $error = "Email Address is Required.";
        exit;}

    else{

        //clean usser input person id

        $companyID = stripslashes( $companyID );
        $companyID=mysqli_real_escape_string($db,$companyID);
        $companyID = htmlspecialchars($companyID);
        $companyID = trim($companyID);

        //clean input address1
        $branchname = stripslashes( $branchname );
        $branchname=mysqli_real_escape_string($db,$branchname);
        $branchname = htmlspecialchars($branchname);
        $branchname = trim($branchname);
        //clean input addressline 2
        $tel = stripslashes( $tel );
        $tel=mysqli_real_escape_string($db,$tel);
        $tel = htmlspecialchars($tel);
        $tel = trim($tel);

        //clean input

        //clean input mobile
        $mobile = stripslashes( $mobile );
        $mobile=mysqli_real_escape_string($db,$mobile);
        $mobile = htmlspecialchars($mobile);
        $mobile = trim($mobile);

        //clean input email
        $email = stripslashes( $email );
        $email=mysqli_real_escape_string($db,$email);
        $email = htmlspecialchars($email);
        $email = trim($email);
        //clean input email
        $branchAddress = stripslashes( $branchAddress );
        $branchAddress=mysqli_real_escape_string($db,$branchAddress);
        $branchAddress = htmlspecialchars($branchAddress);
        $branchAddress = trim($branchAddress);

        if ( ( $stmt=$mysqli->prepare("INSERT INTO branch (companyID,branchName, branchAddress,emailAddress,telephoneNo,mobilePhoneNo,userID) VALUES (?,?,?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('isssssi',$companyID, $branchname, $branchAddress,$email,$tel,$mobile, $userid);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE! "."Record Did Not Add.";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



