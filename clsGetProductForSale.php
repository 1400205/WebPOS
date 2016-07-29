<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 29/07/2016
 * Time: 05:28
 */


include ("connect.php");
include ("myglobal.php");









include ("connect.php");

$keyword = '%'.$_POST['keyword'].'%';

$stmt = $sqlcon->prepare("SELECT s.productID,p.partName,p.partNumber,p.barcode,s.stuckqty,s.sellPrice,s.discount
                               
                                FROM product p 
                                INNER JOIN suppliedStuck s on p.productID=s.productID  WHERE  p.partName=? ORDER BY s.productID ASC LIMIT 0, 10");
     $stmt->bind_param('s', $keyword);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();

foreach ($result as $rs) {
    // put in bold the written text
    $partName = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['partName']);
    // add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['partName']).'\')">'.$partName.'</li>';
}



    // $sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $partName="%{$_GET["partName"]}%";
    //$surname=$_POST["surname"];





?>