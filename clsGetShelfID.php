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

$shelfName="%{$_GET['shelfName']}%";

$shelfName = stripslashes( $shelfName );
$shelfName=mysqli_real_escape_string($db,$shelfName);
$shelfName = htmlspecialchars($shelfName);
$shelfName = trim($shelfName);

$msg="";



//prepare statement
if ($stmt = $sqlcon->prepare("SELECT shelveID FROM shelve where shelveName LIKE ?")) {
    $stmt->bind_param('s', $shelfName);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();
}else{
    $msg = "SELECTION FAIL: Contact System Admin";
}

if ($row = $result->fetch_row()) {

    echo "<option>" . $row[0] . "</option>";


}



