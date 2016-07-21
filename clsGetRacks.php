<?php
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
//get user session name and id
$username=  $_SESSION["uname"];
$userid= $_SESSION["userid"];

$msg="";

if ($userid>0) {

    // if (isset($_POST["submit"])) {

    //  $sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT rackID,rackName,numberOfShelves FROM rack")) {
        // $stmt->bind_param('ss', $firstname,$surname);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    }else{
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

        $line = "<p><a href='frmAddShelf.php?id=" . $row[0] . "'>". "Click Here To Add Shelf to a Rack ". $row[1]." of Capacity ".$row[2]
            . "</a></p>"."<br>";

        // $linePhoto = "<p><img src='".$row[2]."' style='width:100px;height:100px;'></p>";

        $resultText =$resultText.$line;
        // $resultTextPhoto =$resultTextPhoto.$linePhoto;

    }
    //  }
}else{
    $msg = "<a href='index.php'>"."Please login before proceeding". "</a>";
}
?>



