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
    //get user session name and id
    $username= $_SESSION["uname"];
    $userid= $_SESSION["userid"];
    $productID=$_POST[''];
    

    $choice = $_POST['keyword'];

    $qty=$_POST['myqty'];
    $tranID=$_POST['transID'];

    $choice = stripslashes($choice);
    $choice = mysqli_real_escape_string($db, $choice);
    $choice = htmlspecialchars($choice);
    $choice = trim($choice);

    $qty = stripslashes($qty);
    $qty = mysqli_real_escape_string($db, $qty);
    $qty = htmlspecialchars($qty);
    $qty = trim($qty);


    $tranID = stripslashes($tranID);
    $tranID = mysqli_real_escape_string($db, $tranID);
    $tranID = htmlspecialchars($tranID);
    $tranID = trim($tranID);


    $msg = "";


//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT p.productID,p.partname,s.sellPrice,s.stuckqty,discount FROM product P INNER JOIN suppliedstuck s ON p.productID=s.productID where s.status=1 AND partName = ?")) {
       // SELECT p.productID,p.partName,s.stuckqty,s.sellPrice FROM product p INNER JOIN stucksupplied s on p.productID=s.productID WHERE partName=?
        $stmt->bind_param('s', $choice);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    } else {
        $msg = "SELECTION FAIL: Contact System Admin";
    }

    if ($row = $result->fetch_row()) {

        echo '<p>' . $row[0] . '</p>';
        $selctedProduct=$row[0] ;

      /* $stmt=$mysqli->prepare("INSERT INTO cart (productID, qty,transactionID,userID) VALUES (?,?,?,?)");
         //bind parameter
         $stmt->bind_param('idsi',$selctedProduct, $qty,$tranID,$userid);

        $stmt->execute();*/



       /* echo

            "<script>
        var proid =  " . $row[0] . ";
        var partname = ".$row[1]. ";
        var sprice =  " . $row[2] . ";
        var sqty =  " . $row[3] . ";
        var disc =  " . $row[4] . ";
        </script>";*/

    }



