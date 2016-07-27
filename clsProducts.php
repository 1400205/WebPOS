<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 10:28
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
   // $productID=$_GET["id"];
    $productType = $_POST["proTypeID"];
    $partname=$_POST["partName"];
    $partnumber=$_POST["partNumber"];
    $barcode=$_POST["barcode"];
    $OEM=$_POST["OEM"];
    $origin=$_POST["origin"];
    $position=$_POST["partPosition"];
    $discription=$_POST["proDiscription"];
    $proClass=$_POST["proClass"];
    $remark=$_POST["remark"];

    $mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    //check empty fields

    if( empty($_POST["proTypeID"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Type of Product.');window.history.go(-1);</script>";
        $error = "Type Of Product is Required.";
        exit;
    }
    elseif( empty($_POST["partName"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Part Name.');window.history.go(-1);</script>";
        $error = "Part Name is Required.";
        exit;
    }
    elseif( empty($_POST["partNumber"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter Part Number.');window.history.go(-1);</script>";
        $error = "Part Number is Required.";
        exit;
    }
    elseif( empty($_POST["OEM"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
    {
        echo "<script>alert('Please enter OEM.');window.history.go(-1);</script>";
        $error = "OEM is Required.";
        exit;
    }
    elseif( empty($_POST["partPosition"]))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
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

        $productType = stripslashes( $productType );
        $productType=mysqli_real_escape_string($db,$productType);
        $productType = htmlspecialchars($productType);
        $productType = trim($productType);

        $partname = stripslashes( $partname );
        $partname=mysqli_real_escape_string($db,$partname);
        $partname = htmlspecialchars($partname);
        $partname = trim($partname);

        $partnumber = stripslashes( $partnumber );
        $partnumber=mysqli_real_escape_string($db,$partnumber);
        $partnumber = htmlspecialchars($partnumber);
        $partnumber = trim($partnumber);

        $barcode = stripslashes( $barcode );
        $barcode=mysqli_real_escape_string($db,$barcode);
        $barcode = htmlspecialchars($barcode);
        $barcode = trim($barcode);

        $OEM = stripslashes( $OEM );
        $OEM=mysqli_real_escape_string($db,$OEM);
        $OEM = htmlspecialchars($OEM);
        $OEM = trim($OEM);

        $origin = stripslashes( $origin );
        $origin=mysqli_real_escape_string($db,$origin);
        $origin = htmlspecialchars($origin);
        $origin = trim($origin);

        $position = stripslashes( $position );
        $position=mysqli_real_escape_string($db,$position);
        $position = htmlspecialchars($position);
        $position = trim($position);

        $discription = stripslashes( $discription );
        $discription=mysqli_real_escape_string($db,$discription);
        $discription = htmlspecialchars($discription);
        $discription = trim($discription);

        $proClass = stripslashes( $proClass );
        $proClass=mysqli_real_escape_string($db,$proClass);
        $proClass = htmlspecialchars($proClass);
        $proClass = trim($proClass);

        $remark = stripslashes( $remark );
        $remark=mysqli_real_escape_string($db,$remark);
        $remark = htmlspecialchars($remark);
        $remark = trim($remark);







        if ( ( $stmt=$mysqli->prepare("INSERT INTO product (partNumber, partName,proType,barcode,OEM,origin,partPosition,proDescription,proClass,remark,userid)
                                      VALUES (?,?,?,?,?,?,?,?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('ssssssssssi',$partnumber,$partname,$productType,$barcode,$OEM,$origin,$position,$discription,$proClass,$remark,$userid);
            if( $stmt->execute()){
                $error="SUCCESS! "."Record Added Successfully.";
            }else{
                $error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        }else{$error= "CALL Record Addition Failed: Contact Admin";}

    }




}



