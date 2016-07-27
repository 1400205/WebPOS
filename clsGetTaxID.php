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
?>


<?php
include ("connect.php");
include ("myglobal.php");

$tax="%{$_GET['tax']}%";

$tax = stripslashes( $tax );
$tax=mysqli_real_escape_string($db,$tax);
$tax = htmlspecialchars($tax);
$tax = trim($tax);

$msg="";



//prepare statement
if ($stmt = $sqlcon->prepare("SELECT taxID FROM tax where taxName LIKE ?")) {
    $stmt->bind_param('s', $tax);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();
}else{
    $msg = "SELECTION FAIL: Contact System Admin";
}

if ($row = $result->fetch_row()) {

    echo "<option>" . $row[0] . "</option>";


}



