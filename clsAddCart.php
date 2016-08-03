<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 14:06
 */

session_start();
?>


<?php
include ("connect.php");
include ("myglobal.php");
    //get user session name and id
    $username= $_SESSION["uname"];
    $userid= $_SESSION["userid"];
    $productID=$_POST['display_info'];
    

  //  $choice = $_POST['keyword'];

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

    if ($stmt=$mysqli->prepare("INSERT INTO cart (productID, qty,transactionID,userID) VALUES (?,?,?,?)")){
         //bind parameter
         $stmt->bind_param('idsi',$selctedProduct, $qty,$tranID,$userid);

        $stmt->execute();



       /* echo

            "<script>
        var proid =  " . $row[0] . ";
        var partname = ".$row[1]. ";
        var sprice =  " . $row[2] . ";
        var sqty =  " . $row[3] . ";
        var disc =  " . $row[4] . ";
        </script>";*/

    }



