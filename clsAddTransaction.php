
<?php
include ("connect.php");
include ("myglobal.php");


$msg="";
$sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

//$transID=$_POST["transID"];

//clean input user first name
//$transID = stripslashes( $transID );
//$transID=mysqli_real_escape_string($db,$transID);
//$transID = htmlspecialchars($transID);
//$transID = trim($transID);


if ($stmt = $sqlcon->prepare("SELECT c.transactionID,c.cartID, s.productID,c.qty,s.Sellprice,s.Discount
    FROM product p INNER JOIN suppliedstuck s on p.productID=s.productID INNER JOIN
     cart c ON s.productID= c.productID WHERE c.transactionID = '10001'")) {
    //$stmt->bind_param('s', $transID);

    $stmt->execute();
    //get result
    $result = $stmt->get_result();

    $row = $result->fetch_row();

   // $salesdata = array();
    //if ($row = $result->fetch_row()) {

        //$salesdata["alldata"]=array();
        while ($row = $result->fetch_row()) {


           /* $mydata = array();
            $mydata['productID'] = $row[0];
            $mydata['partName'] = $row[1];
            $mydata['qty'] = $row[2];
            $mydata['Sellprice'] = $row[3];
            $mydata['Discount'] = $row[4];
            $mydata['Total'] = $row[5];
            $mydata['cartID'] = $row[6]*/;

           // array_push($salesdata["alldata"],$mydata);

           $stmt=$mysqli->prepare("INSERT INTO transactions (transactionID,cartID, productID,qty,sellPrice,discount) VALUES (?,?,?,?,?,?)");

                //bind parameter
                $stmt->bind_param('siiddd',$row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
                $stmt->execute();
                /*   if( $stmt->execute()){
                       $error="SUCCESS! "."Record Added Successfully.";
                   }else{
                       $error="FAILURE! "."Record Did Not Add. System Does Not Allow Duplicate Records";
                   }*/


        }
//$num_rows = mysqli_num_rows($result);
        ///$salesdata["success"]=1;
       /// echo json_encode($salesdata);

//echo "<script> var num_rows =  " . $num_rows. ";</script>";
        /*if(empty($row)){
            $msg = "Record Not Found";
        }*/
//close the db connection
        mysqli_close($sqlcon);
    //}
}else{
    $msg = "SELECTION FAIL: Contact System Admin";
}

?>