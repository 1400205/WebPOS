
<?php
include ("connect.php");
include ("myglobal.php");




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

echo '<table border="1" style="width:60%">'.'<col width="60">'.'<col width="60">.<col width="60">.<col width="60">'.'<col width="60">'.'<col width="60">'.'<th>'.'ProID'.
    '</th>'.'<th>'.'Name'.'</th>'.'<th>'.'Qty'.

    '</th>'.'<th>'.'Unit Price'.'</th>'.'<th>'.'Total Price'.'</th>'.'Remove From Chart'.'</th>'.'</table>';

    while ($row = $result->fetch_row()) {
        echo    '<table border="1" style="width:60%">'.'<col width="60">'. '<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<col width="60">'.'<tr>'.
            '<a href="changeBugStatus.php?uid="'.$row[0].'>'.'<tr>'.'<td>'.$row[0].'</td>'.'<td>' . $row[1].'</td>'.'<td>'.
            $row[2].'</td>'.'<td>'.$row[3].'<td>'.$row[4].'</td>'.'</td>'.'<td>'. "<input type='checkbox' name='cartID[]' value = '$row[5]'>".
            '</td>'.'</a>'.'<br>'.'</tr>'.'</table>';
        
    }
    if(empty($row)){
        $msg = "Record Not Found";
    }


?>