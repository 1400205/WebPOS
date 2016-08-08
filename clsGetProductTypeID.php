<?php

session_start();

?>


<?php
include ("connect.php");
include ("myglobal.php");

$choice=$_GET['choice'];

$choice = stripslashes( $choice );
$choice=mysqli_real_escape_string($db,$choice);
$choice = htmlspecialchars($choice);
$choice = trim($choice);

$msg="";



//prepare statement
if ($stmt = $sqlcon->prepare("SELECT productTypeID FROM productType where proType=?")) {
    $stmt->bind_param('s', $choice);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();
}else{
    $msg = "SELECTION FAIL: Contact System Admin";
}

if ($row = $result->fetch_row()) {

    echo "<option>" . $row[0] . "</option>";


}



