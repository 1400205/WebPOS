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
       $title = $_POST["title"];
       $firstname = $_POST["firstname"];
       $surname = $_POST["surname"];
       $othernames = $_POST["othername"];
       $dob = $_POST["dob"];
       $gender = $_POST["gender"];

      $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

       if( empty($_POST["title"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
       {
           echo "<script>alert('Please enter title of person.');window.history.go(-1);</script>";
           $error = "title is Required.";
           exit;
       }

    elseif ( empty($_POST["firstname"])){
        echo "<script>alert('Please enter first name of person.');window.history.go(-1);</script>";
        $error = "first name is Required.";
        exit;
      }
       elseif ( empty($_POST["surname"])){
           echo "<script>alert('Please enter surname of person.');window.history.go(-1);</script>";
           $error = "Surname is Required.";
           exit;
       }

    //elseif ( empty($_POST["dob"])){ $error = "Date of Birth is Required.";}

    elseif ( empty($_POST["gender"])){
        echo "<script>alert('Please select gender of person.');window.history.go(-1);</script>";
        $error = "Gender is Required.";
        exit;}
    elseif ( empty($_POST["dob"])){
        echo "<script>alert('Please enter date of birth of person.');window.history.go(-1);</script>";
        $error = "Date of birth is required is Required.";
        exit;}

    else{

        //clean usser input

        //clean input user title
        $title = stripslashes( $title );
        $title=mysqli_real_escape_string($db,$title);
        $title = htmlspecialchars($title);
        $title = trim($title);
        //clean input user first name
        $firstname = stripslashes( $firstname );
        $firstname=mysqli_real_escape_string($db,$firstname);
        $firstname = htmlspecialchars($firstname);
        $firstname = trim($firstname);

        //clean input user surname
        $surname = stripslashes( $surname );
        $surname=mysqli_real_escape_string($db,$surname);
        $surname = htmlspecialchars($surname);
        $surname = trim($surname);

        //clean input user othername
        $othernames = stripslashes( $othernames );
        $othernames=mysqli_real_escape_string($db,$othernames);
        $othernames = htmlspecialchars($othernames);
        $othernames = trim($othernames);

        //clean input user gender
        $gender = stripslashes( $gender );
        $gender=mysqli_real_escape_string($db,$gender);
        $gender = htmlspecialchars($gender);
        $gender = trim($gender);
        //clean input user DOB
        $dob = stripslashes( $dob );
        $dob=mysqli_real_escape_string($db,$dob);
        $dob = htmlspecialchars($dob);
        $dob = trim($dob);

        if ( ( $stmt=$mysqli->prepare("INSERT INTO person (title,firstname, surname, othername,gender,dob,userid) VALUES (?,?,?,?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('ssssssi',$title, $firstname, $surname,$othernames,$gender,$dob,$userid);
           if( $stmt->execute()){
               $error="SUCCESS!"."Record Added Successfully.";
           }else{
               $error="FAILURE!"."Record Did Not Add. System Does Not Allow Duplicate Records";
           }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}

    }




}



