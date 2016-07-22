<?php
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
$username=  $_SESSION["uname"];
$userid= $_SESSION["userid"];

$msg="";

if ($userid>0) {

    // if (isset($_POST["submit"])) {

    //  $sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT sh.shelveID,s.sectionName,s.sectionType,r.rackName,r.numberOfShelves,sh.shelveName
FROM section s 
INNER JOIN rack r ON s.sectionID=r.sectionID
INNER JOIN shelve sh ON r.rackID=sh.rackID
WHERE r.numberOfShelves >0")) {
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

        $line = "<ol>"."<li>"."<p><a href='frmStockProduct.php?id=" . $row[0] . "'>". "Click Here To Stock Product in Shelf: ".$row[5]." ON ". $row[1]." of type ".$row[2]." In Rack: ".$row[3]." Remaining Number of Shelves: ".$row[4]
            . "</a></p>"."<br>"."</li>"."</ol>";

        // $linePhoto = "<p><img src='".$row[2]."' style='width:100px;height:100px;'></p>";
        

        $resultText =$resultText.$line;
        // $resultTextPhoto =$resultTextPhoto.$linePhoto;

    }
    //  }
}else{
    $msg = "<a href='index.php'>"."Please login before proceeding". "</a>";
}
?>



