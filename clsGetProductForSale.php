<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 29/07/2016
 * Time: 05:28
 */


include ("connect.php");
include ("myglobal.php");


    // $sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $partName="%{$_GET["partName"]}%";
    //$surname=$_POST["surname"];



// echo '<select name="title">'; // Open your drop down box

//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT s.productID,p.partName,p.partNumber,p.barcode,s.stuckqty,s.sellPrice,s.discount
                               
                                FROM product p 
                                INNER JOIN suppliedStuck s on p.productID=s.productID  WHERE  p.partName=?")) {
        $stmt->bind_param('s', $partName);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    }else{
        $error = "SELECTION FAIL: Contact System Admin";
    }

    while ($row = $result->fetch_row()) {
        $line = "<p><a href='frmAddStuck.php?id=" . $row[0] . "'>".$row[0]. " ". $row[1]." Part Name, ".$row[5]
            . "</a></p>"."<br>";

        // $linePhoto = "<p><img src='".$row[14]."' style='width:100px;height:100px;'></p>";

        $resultText =$resultText.$line;
        // $resultTextPhoto =$resultTextPhoto.$linePhoto;
    }
    if(empty($resultText)){
        $error = "Record Not Found";
    }


?>