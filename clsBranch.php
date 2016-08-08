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
    $companyID=$_GET["id"];
    $branch = $_POST["cbranch"];
    $ctel = $_POST["ctel"];
    $mobile = $_POST["mobilephoneNo"];
    $email = $_POST["emailAddress"];
    $branchAddress = $_POST["branchAddress"];


    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["cbranch"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Branch Name.');window.history.go(-1);</script>";
        $error = "Branch Name is Required.";
        exit;
    }

    elseif ( empty($_POST["ctel"])){
        echo "<script>alert('Please enter Telephone Number.');window.history.go(-1);</script>";
        $error = "Telephone number is Required.";
        exit;
    }
    elseif ( empty($_POST["branchAddress"])){
        echo "<script>alert('Please enter Branch Address.');window.history.go(-1);</script>";
        $error = "Branch Address is Required.";
        exit;
    }
    elseif ($userid<1){

        $error = "<a href='index.php'>"."Please login before proceeding". "</a>";
    }


    else{

        //clean usser input

        //clean input user title
        $branch = stripslashes( $branch );
        $branch=mysqli_real_escape_string($db,$branch);
        $branch = htmlspecialchars($branch);
        $branch = trim($branch);
        //clean input user first name
        $ctel = stripslashes( $ctel );
        $ctel=mysqli_real_escape_string($db,$ctel);
        $ctel = htmlspecialchars($ctel);
        $ctel = trim($ctel);

        //clean input user surname
        $mobile = stripslashes( $mobile );
        $mobile=mysqli_real_escape_string($db,$mobile);
        $mobile = htmlspecialchars($mobile);
        $mobile = trim($mobile);

        //clean input user othername
        $branchAddress = stripslashes( $branchAddress );
        $branchAddress=mysqli_real_escape_string($db,$branchAddress);
        $branchAddress = htmlspecialchars($branchAddress);
        $branchAddress = trim($branchAddress);
        //clean input user othername
        $companyID = stripslashes( $companyID );
        $companyID=mysqli_real_escape_string($db,$companyID);
        $companyID = htmlspecialchars($companyID);
        $companyID = trim($companyID);


        if ( ( $stmt=$mysqli->prepare("INSERT INTO branch (branchname,branchAddress, telephoneNo, mobilePhoneNo,companyID,userid) VALUES (?,?,?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('ssssii',$branch, $branchAddress, $ctel,$mobile,$companyID,$userid);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



