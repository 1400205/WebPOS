<?php
// Start the session
//session_start();
?>
<?php

//get user session name and id
//$username= $_SESSION["uname"];
//$userid= $_SESSION["userid"];
try{

    /**
     * Created by PhpStorm.
     * User: prosper
     * Date: 02/03/2016
     * Time: 15:47
     */

    //include ("connect.php");//Establishing connection with our database
    include ("myglobal.php");
//declare instance of connection
    include ("connect.php");




       // $sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);




            //prepare statement
            if($stmt=$sqlcon->prepare("SELECT titleName FROM Titles")){

                $stmt->execute();
                //get result
                $result = $stmt->get_result();
            }
            echo "<select name='title'>";
            while($row=$result->fetch_row())
            {
                echo "<option value='" . $row['0'] ."'>" . $row['0'] ."</option>";

                echo "</select>";
            }


}catch(Exception $e){
    $error=$e->getMessage();
}

?>
