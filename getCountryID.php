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

$country=$_GET['country'];

$country = stripslashes( $country );
$country=mysqli_real_escape_string($db,$country);
$country = htmlspecialchars($country);
$country = trim($country);

$msg="";



//prepare statement
if ($stmt = $sqlcon->prepare("SELECT countryID FROM country where CountryName ='$country'")) {
     $stmt->bind_param('s', $country);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();
}else{
    $msg = "SELECTION FAIL: Contact System Admin";
}

if ($row = $result->fetch_row()) {

    echo "<option>" . $row[0] . "</option>";


}



