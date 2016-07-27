<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 14:06
 */

session_start();
?>


<?php
include ("connect.php");
include ("myglobal.php");

$discount=$_GET['discountVal'];

$discount = stripslashes( $discount );
$discount=mysqli_real_escape_string($db,$discount);
$discount = htmlspecialchars($discount);
$discount = trim($discount);

$msg="";



//prepare statement
if ($stmt = $sqlcon->prepare("SELECT discountID FROM discount where percentDiscountRate LIKE ?")) {
    $stmt->bind_param('i', $discount);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();
}else{
    $msg = "SELECTION FAIL: Contact System Admin";
}

if ($row = $result->fetch_row()) {

    echo "<option>" . $row[0] . "</option>";


}



