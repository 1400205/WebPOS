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

$choice=$_GET['choice'];

$choice = stripslashes( $choice );
$choice=mysqli_real_escape_string($db,$choice);
$choice = htmlspecialchars($choice);
$choice = trim($choice);

$msg="";



//prepare statement
if ($stmt = $sqlcon->prepare("SELECT p.productID,p.partName,s.stuckqty,s.sellPrice FROM product p INNER JOIN stucksupplied s on p.productID=s.productID WHERE p.partName=?")) {
    $stmt->bind_param('s', $choice);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();
}else{
    $msg = "SELECTION FAIL: Contact System Admin";
}
While ($row = $result->fetch_row()) {


    $line = "<p><a href='#?id=" . $row[0] . "'>". " ". $row[1]
        . " " . $row[3] . "," . $row[2] ." "."Born on ".$row[7]. "</a></p>"."<br>";

    $linePhoto = "<p><img src='".$row[14]."' style='width:100px;height:100px;'></p>";

    $resultText =$resultText.$line;
    $resultTextPhoto =$resultTextPhoto.$linePhoto;
    echo "<option>" . $row[0] . "</option>";

}



