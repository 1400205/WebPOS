
<?php
include ("connect.php");
include ("myglobal.php");


if(isset($_POST["submit"])) {

    // $sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $supplierName="%{$_POST["supplierName"]}%";
    //$surname=$_POST["surname"];



// echo '<select name="title">'; // Open your drop down box

//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT supplierID,supplierName FROM supplier WHERE status=1 && supplierName LIKE ?")) {
        $stmt->bind_param('s', $supplierName);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    }else{
        $error = "SELECTION FAIL: Contact System Admin";
    }

    while ($row = $result->fetch_row()) {
        $line = "<p><a href='frmAddStuck.php?id=" . $row[0] . "'>".$row[0]. " Click Here to Select Supplier: ". $row[1]." </a></p>"."<br>";

        // $linePhoto = "<p><img src='".$row[14]."' style='width:100px;height:100px;'></p>";

        $resultText =$resultText.$line;
        // $resultTextPhoto =$resultTextPhoto.$linePhoto;
    }
    if(empty($resultText)){
        $error = "Record Not Found";
    }

}
?>