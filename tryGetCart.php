
<?php
include ("connect.php");
include ("myglobal.php");


$msg="";

$sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$transID=$_POST["transID"];


//clean input user first name
$transID = stripslashes( $transID );
$transID=mysqli_real_escape_string($db,$transID);
$transID = htmlspecialchars($transID);
$transID = trim($transID);


if ($stmt = $sqlcon->prepare("SELECT s.productID,p.partName,c.qty,s.Sellprice,c.qty*s.Sellprice,c.cartID AS Total
    FROM product p INNER JOIN suppliedstuck s on p.productID=s.productID INNER JOIN
     cart c ON s.productID= c.productID WHERE c.transactionID=?")) {
   $stmt->bind_param('s', $transID);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();

}else{
    $msg = "SELECTION FAIL: Contact System Admin";
}

/*echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">.<col width="60">.<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'ProID'.
    '</th>'.'<th>'.'Name'.'</th>'.'<th>'.'Qty'.

    '</th>'.'<th>'.'Unit Price'.'</th>'.'<th>'.'Total Price'.'</th>'.'Remove From Chart'.'</th>'.'</table>';*/
$row = $result->fetch_row();

while ($row = $result->fetch_row()) {


 /*$line=   '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
        '<a href="changeBugStatus.php?uid="'.$row[0].'>'.'<tr>'.'<td>'.$row[0].'</td>'.'<td>' . $row[1].'</td>'.'<td>'.
        $row[2].'</td>'.'<td>'.$row[3].'<td>'.$row[4].'</td>'.'</td>'.'<td>'. "<input type='checkbox' name='cartID[]' value = '$row[5]'>".
        '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';
    $resultText =$resultText.$line;*/

   // echo "<script> var cartdata =  " . $resultText. ";</script>";

    //echo   $resultText;

    echo "<script> var proid =  " . $row[0]. ";</script>";
    echo "<script> var partName =  " . $row[1]. ";</script>";
    echo "<script> var qty =  " . $row[2]. ";</script>";
    echo "<script> var sellPrice =  " . $row[3]. ";</script>";
    echo "<script> var total =  " . $row[4]. ";</script>";


}
$num_rows = mysqli_num_rows($result);

echo "<script> var num_rows =  " . $num_rows. ";</script>";
if(empty($row)){
    $msg = "Record Not Found";
}


?>