
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include ("connect.php");
include ("myglobal.php");
global $sqlcon;
$sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


if(isset($_POST["submit"])) {


    $transID=$_POST["transID"];
    /// $surname=$_POST["surname"];

    //clean input user first name
    // $firstname = stripslashes( $firstname );
    //$firstname=mysqli_real_escape_string($db,$firstname);
    //$firstname = htmlspecialchars($firstname);
    // $firstname = trim($firstname);

    //clean input user surname
    $transID = stripslashes( $transID );
    $transID=mysqli_real_escape_string($db,$transID);
    $transID = htmlspecialchars($transID);
    $transID = trim($transID);

//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT c.transactionID,c.cartID, s.productID,c.qty,s.Sellprice,s.Discount
    FROM product p INNER JOIN suppliedstuck s on p.productID=s.productID INNER JOIN
     cart c ON s.productID= c.productID WHERE c.transactionID = ?")) {

        $stmt->bind_param('s',$transID);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    }
        $row = $result->fetch_row();
   // while ($row = $result->fetch_row()) {
    foreach ($row as $rw) {

       /* if ( ( $stmt=$mysqli->prepare("INSERT INTO transactions(transactionID,cartID, productID,qty,sellPrice,discount) VALUES (?,?,?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('siiidd',$row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}*/
        $line = "<p><a href='addEmployeeForm.php?id=" . $rw[0] . "'>". "Click Here To Add Employee Of ". $rw[1]
            . " " . $rw[2] . "," . $rw[3] ." "."Born on ".$rw[4]. "</a></p>"."<br>";

       // $linePhoto = "<p><img src='".$row[14]."' style='width:100px;height:100px;'></p>";

        $resultText =$resultText.$line;
       // $resultTextPhoto =$resultTextPhoto.$linePhoto;
        //insert records
       // $sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


    }
   /* foreach ($row as $row1){
        if ( ( $stmt=$mysqli->prepare("INSERT INTO transactions(transactionID,cartID, productID,qty,sellPrice,discount) VALUES (?,?,?,?,?,?)"))){
            //bind parameter
            $stmt->bind_param('siiidd',$row1[0],$row1[1],$row1[2],$row1[3],$row1[4],$row1[5]);
            if( $stmt->execute()){
                $error="SUCCESS!"."Record Added Successfully.";
            }else{
                $error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        }else{$error= "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;}
    }*/
    if(empty($row)){
        $msg = "Record Not Found";
    }

}
?>