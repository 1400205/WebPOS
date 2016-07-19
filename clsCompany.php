<?php
session_start();
//include ("secureSessionID.php");//verify user session
//include ("inactiveTimeOut.php");//check user idle time
?>
<?php
//get user session name and id
$username=  $_SESSION["uname"];
$userid= $_SESSION["userid"];

include("connect.php"); //Establishing connection with our database



$msg = ""; //Variable for storing our errors.



if(isset($_POST["submit"]))
{


    $url = "test";
    $companyName= $_POST['company'];
    //clean input title
    //clean usser input person id

    $companyName = stripslashes( $companyName );
    $companyName=mysqli_real_escape_string($db,$companyName);
    $companyName = htmlspecialchars($companyName);
    $companyName = trim($companyName);


    //check for file upload error
    if(isset($_FILES['fileToUpload'])){
        if($_FILES['fileToUpload']['error'] == 0) {

            // Where are we going to be writing to?
            $target_dir = "uploads/";
            $target_file = basename($_FILES['fileToUpload']['name']);

            // File information
            $uploaded_name = $_FILES['fileToUpload']['name'];
            $uploaded_ext = substr($uploaded_name, strrpos($uploaded_name, '.') + 1);
            $uploaded_size = $_FILES['fileToUpload']['size'];
            $uploaded_tmp = $_FILES['fileToUpload']['tmp_name'];
            $uploadOk = 1;
            $line = "<p><img src='".$target_file."' style='width:100px;height:100px;'></p>";
            $resultText = $resultText.$line;
        }
    }

    if($userid >0) {

        //restrict file type and size
        if( ( strtolower( $uploaded_ext ) == "jpg" || strtolower( $uploaded_ext ) == "jpeg" || strtolower( $uploaded_ext ) == "png" ) &&
            ( $uploaded_size < 100000 ) &&
            getimagesize( $uploaded_tmp ) ) {

            // Can we move the file to the upload folder?
            if (move_uploaded_file($uploaded_tmp, $target_file)) {
                //connect to db
                $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                //if(!$mysqli) die('Could not connect$: ' . mysqli_error());

                //test connection
                if ($mysqli->connect_errno) {
                    echo "Connection Fail:Check network connection";//: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }

                //call procedure
                if (!( $stmt=$mysqli->prepare("INSERT INTO company (companyName,targetfile, userID) VALUES (?,?,?)"))) {
                    $msg = "prepared statemet problem";
                } else {

                    $stmt->bind_param('ssi',$companyName, $target_file, $userid);
                    if( $stmt->execute()){
                        $msg = "Thank You! The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded. click <a href='searchPersonForm.php'>here</a> to go back";
                    }
                    else{$msg= "Execute failed: (" . $mysqli->errno . ") " . $mysqli->error;}

                }
            }
            else{
                $msg = "Your image was not uploaded";
            }
        }else{
            $msg = "Your image was not uploaded. You can only accept JPEG ,PNG images and Max. file size of 100KB";
        }

    }
    else{
        $msg = "You need to login first";
    }
}

?>