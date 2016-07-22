
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
    if ($stmt = $sqlcon->prepare("SELECT p.personID,p.title,p.firstName,p.surname,p.othername,p.Gender,p.Gender,p.DOB,
                                r.addressline1,r.addressline2,r.postBox,r.town,r.region,r.country,pp.targetfile 
                                FROM person p 
                                INNER JOIN personaddress r on p.personID=r.personID INNER JOIN personphoto pp on p.personID=pp.personID
                                WHERE p.personID NOT IN (SELECT personID FROM employee) AND p.firstName=? AND p.surname=?")) {
        $stmt->bind_param('ss', $firstname,$surname);

        $stmt->execute();
        //get result
        $result = $stmt->get_result();
    }

    while ($row = $result->fetch_row()) {
        $line = "<p><a href='addEmployeeForm.php?id=" . $row[0] . "'>". "Click Here To Add Employee Of ". $row[1]
            . " " . $row[3] . "," . $row[2] ." "."Born on ".$row[7]. "</a></p>"."<br>";

        $linePhoto = "<p><img src='".$row[14]."' style='width:100px;height:100px;'></p>";

        $resultText =$resultText.$line;
        $resultTextPhoto =$resultTextPhoto.$linePhoto;
    }


}
?>