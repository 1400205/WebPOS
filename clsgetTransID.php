<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 14:06
 */


/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 21/07/2016
 * Time: 17:16
 */

//session_start();
?>


<?php
include ("connect.php");
include ("myglobal.php");

/*$choice="%{$_GET['choice']}%";

$choice = stripslashes( $choice );
$choice=mysqli_real_escape_string($db,$choice);
$choice = htmlspecialchars($choice);
$choice = trim($choice);

$msg="";*/



//prepare statement
if ($stmt = $sqlcon->prepare("SELECT MAX(transID) FROM genTrans")) {
    // $stmt->bind_param('s', $choice);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();
}else{
    $msg = "SELECTION FAIL: Contact System Admin";
}

if ($row = $result->fetch_row()) {

//    $resultText =$row[0] ;

    echo "<script> var transid =  " . $row[0] . ";</script>";

}



