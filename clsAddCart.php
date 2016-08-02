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

session_start();
?>


<?php
include ("connect.php");
include ("myglobal.php");
//get user session name and id
$username= $_SESSION["uname"];
$userid= $_SESSION["userid"];


    $choice = $_POST['keyword'];

//$qty=$_POST['myqty'];
//$shoppingID=$_POST['customerID'];

    /*$choice = stripslashes($choice);
    $choice = mysqli_real_escape_string($db, $choice);
    $choice = htmlspecialchars($choice);
    $choice = trim($choice);*/

    $qty = stripslashes($qty);
    $qty = mysqli_real_escape_string($db, $qty);
    $qty = htmlspecialchars($qty);
    $qty = trim($qty);


    $shoppingID = stripslashes($shoppingID);
    $shoppingID = mysqli_real_escape_string($db, $shoppingID);
    $shoppingID = htmlspecialchars($shoppingID);
    $shoppingID = trim($shoppingID);


    $msg = "";


//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT productID FROM product where partName = ?")) {
        $stmt->bind_param('s', $choice);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    } else {
        $msg = "SELECTION FAIL: Contact System Admin";
    }

    if ($row = $result->fetch_row()) {

        /* $stmt=$mysqli->prepare("INSERT INTO cart (productID, qty,shoppingID,userID) VALUES (?,?,?,?)");
         //bind parameter
         $stmt->bind_param('idsi',$row[0], $qty,$shoppingID,$userid);*/
        $selctedProduct=$row[0] ;

        echo '<p>' . $row[0] . '</p>';

    }



