
<?php
include ("connect.php");
include ("myglobal.php");


if(isset($_POST["submit"])) {

    // $sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $productName="%{$_POST["pName"]}%";
    //$surname=$_POST["surname"];



// echo '<select name="title">'; // Open your drop down box

//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT productID,partName,partNumber,proDescription FROM product WHERE partName LIKE ?")) {
        $stmt->bind_param('s', $productName);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    }else{
        $error = "SELECTION FAIL: Contact System Admin";
    }

    while ($row = $result->fetch_row()) {
        $line = "<p><a href='frmAddStuck.php?id=" . $row[0] . "'>".$row[0]. " ". $row[1]." Part Number, ".$row[2]
            . "</a></p>"."<br>";

         $lineXSS = "<p>".$row[3]."</p>";

        $resultText =$resultText.$line;
         $resultTextXSS =$resultTextXSS.$lineXSS;
    }
    if(empty($resultText)){
        $error = "Record Not Found";
    }

}
?>