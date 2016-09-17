
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
     cart c ON s.productID= c.productID WHERE c.transactionID='10001'")) {
   //$stmt->bind_param('s', $transID);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();


/*echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">.<col width="60">.<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'ProID'.
    '</th>'.'<th>'.'Name'.'</th>'.'<th>'.'Qty'.

    '</th>'.'<th>'.'Unit Price'.'</th>'.'<th>'.'Total Price'.'</th>'.'Remove From Chart'.'</th>'.'</table>';*/
$row = $result->fetch_row();

$salesdata = array();
if ($row = $result->fetch_row()) {

    $salesdata["alldata"]=array();
    while ($row = $result->fetch_row()) {


        /*$line=   '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
               '<a href="changeBugStatus.php?uid="'.$row[0].'>'.'<tr>'.'<td>'.$row[0].'</td>'.'<td>' . $row[1].'</td>'.'<td>'.
               $row[2].'</td>'.'<td>'.$row[3].'<td>'.$row[4].'</td>'.'</td>'.'<td>'. "<input type='checkbox' name='cartID[]' value = '$row[5]'>".
               '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';
           $resultText =$resultText.$line;*/

        // echo "<script> var cartdata =  " . $resultText. ";</script>";

        //echo   $resultText;
        $mydata = array();
        $mydata['productID'] = $row[0];
        $mydata['partName'] = $row[1];
        $mydata['qty'] = $row[2];
        $mydata['Sellprice'] = $row[3];


        /*echo "<script> var proid =  " . $row[0]. ";</script>";
        echo "<script> var partName =  " . $row[1]. ";</script>";
        echo "<script> var qty =  " . $row[2]. ";</script>";
        echo "<script> var sellPrice =  " . $row[3]. ";</script>";
        echo "<script> var total =  " . $row[4]. ";</script>";*/
        array_push($salesdata["alldata"],$mydata);

}
//$num_rows = mysqli_num_rows($result);
$salesdata["success"]=1;
    echo json_encode($salesdata);

//echo "<script> var num_rows =  " . $num_rows. ";</script>";
    /*if(empty($row)){
        $msg = "Record Not Found";
    }*/
//close the db connection
    mysqli_close($sqlcon);
}
}else{
    $msg = "SELECTION FAIL: Contact System Admin";
}


?>