<?php
// Start the session
session_start();
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include ("connect.php");
include ("myglobal.php");
//get user session name and id
$username= $_SESSION["uname"];
$userid= $_SESSION["userid"];

//include ("connect.php");

$transID = $_POST['transID'];

$stmt = $sqlcon->prepare("SELECT c.transactionID,c.cartID, s.productID,c.qty,s.Sellprice,s.Discount
    FROM product p INNER JOIN suppliedstuck s on p.productID=s.productID INNER JOIN
     cart c ON s.productID= c.productID WHERE c.transactionID = $transID");

$stmt->bind_param('s', $transID);

$stmt->execute();
//get result
$result = $stmt->get_result();
//foreach ($result as $rs) {
while ($row = $result->fetch_row()) {


    if ( ( $stmt=$mysqli->prepare("INSERT INTO transactions(transactionID,cartID, productID,qty,sellPrice,discount) VALUES (?,?,?,?,?,?)"))){

        //bind parameter
        $stmt->bind_param('siiidd',$row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
        $stmt->execute();
     /*   if( $stmt->execute()){
            $error="SUCCESS! "."Record Added Successfully.";
        }else{
            $error="FAILURE! "."Record Did Not Add. System Does Not Allow Duplicate Records";
        }*/
    }else{$error= "CALL Record Addition Failed: Contact Admin";}
    // put in bold the written text
    ////$partName = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $row[0]);

    // add new option

   //// echo '<li onclick="set_item(\''.str_replace("'", "\'", $row[0]).'\')">'.$partName.' GHS '.$row[1].'</li>';
}

?>