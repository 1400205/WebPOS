<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 29/07/2016
 * Time: 05:28
 */


include ("connect.php");
include ("myglobal.php");

//include ("connect.php");

//$keyword = '%'.$_POST['keyword'].'%';

$stmt = $sqlcon->prepare("SELECT c.transactionID,c.cartID, s.productID,c.qty,s.Sellprice,s.Discount
    FROM product p INNER JOIN suppliedstuck s on p.productID=s.productID INNER JOIN
     cart c ON s.productID= c.productID WHERE c.transactionID='10001'");

//$stmt->bind_param('s', $keyword);

$stmt->execute();
//get result
$result = $stmt->get_result();

//foreach ($result as $rs) {
while ($row = $result->fetch_row()) {
    // put in bold the written text
    ////$partName = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $row[0]);

    // add new option

   //// echo '<li onclick="set_item(\''.str_replace("'", "\'", $row[0]).'\')">'.$partName.' GHS '.$row[1].'</li>';
}

?>