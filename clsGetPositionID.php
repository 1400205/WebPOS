<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 23/07/2016
 * Time: 20:55
 */

/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 21/07/2016
 * Time: 17:16
 */

session_start();
//include ("secureSessionID.php");//verify user session
//include ("inactiveTimeOut.php");//check user idle time
?>


<?php
include ("connect.php");
include ("myglobal.php");

$position=$_GET['position'];

$position = stripslashes( $position );
$position=mysqli_real_escape_string($db,$position);
$position = htmlspecialchars($position);
$position = trim($position);

$msg="";



//prepare statement
if ($stmt = $sqlcon->prepare("SELECT positionID FROM positions where partPosition ='$position'")) {
    $stmt->bind_param('s', $position);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();
}else{
    $msg = "SELECTION FAIL: Contact System Admin";
}

if ($row = $result->fetch_row()) {

    echo "<option>" . $row[0] . "</option>";


}



