
<?php
include ("connect.php");
include ("myglobal.php");


if(isset($_POST["submit"])) {

    $sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT companyID,companyName,logo FROM company WHERE companyID=1")) {
       // $stmt->bind_param('ss', $firstname,$surname);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    }

    while ($row = $result->fetch_row()) {
        $mycompanyID=$row[0];
        $mycompanyName=$row[1];
        $mylogo=$row[2];
       $getcompnayID=$getcompanyID.$mycompanyID;
        $getCompanyName =$getCompanyName.$mycompanyName;
        $getlogo=$getlogo.$mylogo;
       
    }


}
?>