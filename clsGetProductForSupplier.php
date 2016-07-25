<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 11:17
 */

include ("connect.php");
include ("myglobal.php");


if(isset($_POST["submit"])) {

    $sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $productName = $_POST['productName'];


//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT productID,productName FROM product WHERE productName=?")) {
        $stmt->bind_param('s', $productName);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    }else{
        $msg = "SELECTION FAIL: Contact System Admin";
    }

    while ($row = $result->fetch_row()) {
        $line = "<p><a href='frmAddSupply?id=" . $row[0] . "'>" . "Add Supply of Product: " . $row[1] . " ON " . $row[1] . "</a></p>" . "<br>";

        // $linePhoto = "<p><img src='".$row[2]."' style='width:100px;height:100px;'></p>";


        $resultText = $resultText . "<ul>" . "<li>" . $line . "</li>" . "</ul>";
    }
    if(empty($row)){
        $msg = "Record Not Found";
    }

}
?>