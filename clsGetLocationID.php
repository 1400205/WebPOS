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

$choice=$_GET['choice'];

$choice = stripslashes( $choice );
$choice=mysqli_real_escape_string($db,$choice);
$choice = htmlspecialchars($choice);
$choice = trim($choice);

$msg="";



//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT locationID FROM locationDetails where locationName ='$choice'")) {
        // $stmt->bind_param('ss', $firstname,$surname);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    }else{
        $msg = "SELECTION FAIL: Contact System Admin";
    }

    if ($row = $result->fetch_row()) {
       
        echo "<option>" . $row[0] . "</option>";

      
    }



