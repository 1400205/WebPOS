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

    $personID = $_GET['id'];

    $jobtitle = $_POST["jobtitle"];

    $hiredDate = $_POST["hiredDate"];
    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if($personID<1)//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please select a valid person.');window.history.go(-1);</script>";
        $error = "Valid person is Required.";
        exit;
    }

    elseif ( $userid<0){
        echo "<script>alert('Please login as registered user.');window.history.go(-1);</script>";
        $error = "Valid user login in is required.";
        exit;
    }
    elseif ( empty($_POST["jobtitle"])){
        echo "<script>alert('Please Select Job Title of Employee.');window.history.go(-1);</script>";
        $error = "Address Line 1 is Required.";
        exit;
    }
    elseif ( empty($_POST["hiredDate"])){
        echo "<script>alert('Please Enter Date Hired.');window.history.go(-1);</script>";
        $error = "Date Hired is Required.";
        exit;
    }



    else{

        //clean usser input person id

        $personID = stripslashes( $personID );
        $personID=mysqli_real_escape_string($db,$personID);
        $personID = htmlspecialchars($personID);
        $personID = trim($personID);

        //clean input address1
        $jobtitle = stripslashes( $jobtitle );
        $jobtitle=mysqli_real_escape_string($db,$jobtitle);
        $jobtitle = htmlspecialchars($jobtitle);
        $jobtitle = trim($jobtitle);
        //clean input addressline 2


        if ( ( $stmt=$mysqli->prepare("INSERT INTO employee (personID,jobTitle,userid,hiredDate) VALUES (?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('isis',$personID, $jobtitle, $userid,$hiredDate);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



