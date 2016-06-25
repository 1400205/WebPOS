
<?php
include ("connect.php");
include ("myglobal.php");


if(isset($_POST["submit"])) {

    $sqlcon = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $firstname=$_POST["firstname"];
    $surname=$_POST["surname"];

    //clean input user first name
    $firstname = stripslashes( $firstname );
    $firstname=mysqli_real_escape_string($db,$firstname);
    $firstname = htmlspecialchars($firstname);
    $firstname = trim($firstname);

    //clean input user surname
    $surname = stripslashes( $surname );
    $surname=mysqli_real_escape_string($db,$surname);
    $surname = htmlspecialchars($surname);
    $surname = trim($surname);

// echo '<select name="title">'; // Open your drop down box

//prepare statement
    if ($stmt = $sqlcon->prepare("SELECT personID,title,firstname,surname,dob FROM person WHERE firstname=? and surname=?")) {
        $stmt->bind_param('ss', $firstname,$surname);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    }

    while ($row = $result->fetch_row()) {
        $line = "<p><a href='personOtherDetailsForm.php?id=" . $row[0] . "'>". "Click to Add Address Of"." " . $row[1]
            . " " . $row[3] . "," . $row[2] ." "."Born on ".$row['4']. "</a></p>"."<br>";
        $linePhoto = "<p><a href='loadPhotoForm.php?id=" . $row[0] . "'>". "Click to Add Photo Of"." " . $row[1]
            . " " . $row[3] . "," . $row[2] ." "."Born on ".$row['4']. "</a></p>"."<br>";

        $resultText =$resultText.$line;
        $resultTextPhoto =$resultTextPhoto.$linePhoto;
    }


}
?>