<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 01:13
 */

/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 02:05
 */


session_start();
//include ("secureSessionID.php");//verify user session
//include ("inactiveTimeOut.php");//check user idle time
?>


<?php
include ("connect.php");
include ("myglobal.php");
//get user session name and id

$userid= $_SESSION["userid"];

if (isset($_POST['submit'])) {
    $productName = "%{$_POST['productName']}%";

    $msg = "";

    if ($userid > 0) {

        // if (isset($_POST["submit"])) {

        //  $sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


//prepare statement
        if ($stmt = $sqlcon->prepare("SELECT productID,productName,partNumber,partPostion,OEM FROM product WHERE productName LIKE ?")) {
            $stmt->bind_param("s", $productName);

            $stmt->execute();
            //get resul
            $result = $stmt->get_result();
        } else {
            $msg = "SELECTION FAIL: Contact System Admin";
        }

        while ($row = $result->fetch_row()) {
            //  $mycompanyID = $row[0];
            //$mycompanyName = $row[1];
            // $mylogo = $row[2];
            // $getcompnayID = $getcompanyID . $mycompanyID;
            //  $getCompanyName = $getCompanyName . $mycompanyName;
            // $getlogo = $getlogo . $mylogo;

            //  $mylogo = "<p><img src='".$row[2]."' style='width:100px;height:100px;'></p>";
            // $getlogo = $getlogo.$mylogo;

            $line = "<p><a href='frmAddSupply?id=" . $row[0] . "'>" . "Add Supply of Product: " . $row[1] . " ON " . $row[1] . "</a></p>" . "<br>";

            // $linePhoto = "<p><img src='".$row[2]."' style='width:100px;height:100px;'></p>";


            $resultText = $resultText . "<ul>" . "<li>" . $line . "</li>" . "</ul>";
            // $resultTextPhoto =$resultTextPhoto.$linePhoto;

        }
        //  }
    } else {
        $msg = "<a href='index.php'>" . "Please login before proceeding" . "</a>";
    }

}
?>



