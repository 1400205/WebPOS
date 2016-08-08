<?php
// Start the session
session_start();
?>
<?php


    /**
     * Created by PhpStorm.
     * User: prosper
     * Date: 02/03/2016
     * Time: 15:47
     */

    include ("connect.php");//Establishing connection with our database
    include ("myglobal.php");
//declare instance of connection

    if((isset($_POST['username'])) && (isset($_POST['password']))){


        /*if (!isset($_POST['_token'])&&( $_POST['_token']!==$_SESSION['_token']))//QUESTIONS MUST CONTAIN AT LEAST ONE CATEGORY
        {
            echo "<script>alert('Invalid AntiCSRF');window.history.go(-1);</script>";
            $error = "Invalid AntiCSRF.";
            exit;
        }*/
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result=0;
        $attempt=0;
        $dpassword="";
        $dusername="";
       // $token=$_POST["_token"];
       
       
        /*if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $_SESSION["ip"]=$_SERVER["HTTP_CLIENT_IP"];
        }
        elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $_SESSION["ip"]=$_SERVER["HTTP_X_FORWARDED_FOR"];
        }else
        {
            $_SESSION["ip"]=$_SERVER["REMOTE_ADDR"];

        }*/

        //strip variables of all sql injections
        //clean input user othername
        $username = stripslashes( $username );
        $username=mysqli_real_escape_string($db,$username);
        $username = htmlspecialchars($username);
        $username = trim($username);

        // $password=md5($password);
        $_SESSION["uname"] = $username;


        //$sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        if(empty($_POST["username"]) || empty($_POST["password"]))
        {
            $error= "Both fields are required.";
        }else {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $result=0;

            if (($sqlcon->connect_errno)){



                /*$stmt=$sqlcon->prepare("UPDATE WebPOS_user SET loginAttempt=loginAttempt+1 WHERE username=?  ");
                $stmt->bind_param('s',$username);
                $stmt->execute();
                $error=" Incorrect User Name Or Password";
               // $error="Connection Failed, Incorrect User Name Or Password";


                $stmt=$sqlcon->prepare("SELECT loginAttempt FROM WebPOS_user  WHERE username=?");
                $stmt->bind_param('s',$username);
                $stmt->execute();
                $result = $stmt->get_result();
                if($row=$result->fetch_row()) {
                    $attempt = $row[0];
                }
             if ($attempt >3)   {

                 $stmt=$sqlcon->prepare("UPDATE WebPOS_user SET userStatus=0 WHERE username=?  ");
                 $stmt->bind_param('s',$username);
                 $stmt->execute();
                 $error= "Your user account is disabled! Contact Admin";

             }*/

            }






            // $sql="SELECT userID,typeAdmin,userStatus FROM WebPOS_user WHERE username='$username' and password='$password'";

            //prepare statement
            if($stmt=$sqlcon->prepare("SELECT userID,typeAdmin,userStatus,password,userName FROM WebPOS_user WHERE username=? and password=?")){
                //bind parameter
                $stmt->bind_param('ss',$username,$password);
                $stmt->execute();
                //get result
                $result = $stmt->get_result();
            }
            // $result=mysqli_query($db,$sql);

            //$row=mysqli_fetch_array($result);//get the row of data

            if($row=$result->fetch_row())
            {
                $usertype = $row[1];//get user type
                $userstatus = $row[2];//get user status
                $userid = $row[0];//get user id
                $dpassword=$row[3];
                $dusername=$row[4];

                $_SESSION["uname"] = $username;
                $_SESSION["pwd"] = $password;

                $_SESSION["usertype"] = $usertype;//user type assigned to session global variable
                $_SESSION["userstatus"] = $userstatus;//user stautus assigned to session global variable
                $_SESSION["userid"] = $userid;//user id assigned to session global variable
                $_SESSION["ip"] = $_SERVER['REMOTE_ADDR'];//get client IP address
                $_SESSION ["timeout"]=time();//get login time
               // get_client_ip();

                if( $userstatus==1 and $usertype==1){
                    header("location: home1.php"); // Redirecting To another Page

                    $_SESSION["uname"] = $username;
                    $_SESSION["pwd"] = $password;

                    $_SESSION["usertype"] = $usertype;//user type assigned to session global variable
                    $_SESSION["userstatus"] = $userstatus;//user stautus assigned to session global variable
                    $_SESSION["userid"] = $userid;//user id assigned to session global variable
                   $_SESSION["ip"] = $_SERVER['REMOTE_ADDR'];//get client IP address
                   $_SESSION ["timeout"]=time();//get login time
                   // $ip= $_SESSION["ip"];
                    $time = $_SERVER['REQUEST_TIME'];


                }
                elseif ( $userstatus==1 and $usertype<>0 )
                {
                    $usertype = $row['typeAdmin'];//get user type
                    $userstatus = $row['userStatus'];//get user status
                    header("location: home1.php"); // Redirecting To another Page
                    $_SESSION["usertype"] = $usertype;//user type assigned to session global variable
                    $_SESSION["userstatus"] = $userstatus;//user stautus assigned to session global variable
                    $_SESSION["userid"] = $userid;//user id assigned to session global variable
                   $_SESSION["ip"] = $_SERVER['REMOTE_ADDR'];//get client IP address
                   $_SESSION ["timeout"]=time();//get login time
                    $time = $_SERVER['REQUEST_TIME'];
                    //$ip= $_SESSION["ip"];

                }
                elseif ( $userstatus==0 )
                {
                    $error= "Account Disabled! Contact System Admin";
                }
                else
                {
                    $error= "Incorrect username or password.";

                }
            }
            if ((trim($dusername)==trim($username))&&(trim($dpassword)<>trim($password))){

                $stmt=$sqlcon->prepare("UPDATE WebPOS_user SET loginAttempt=loginAttempt+1 WHERE username=?  ");
                $stmt->bind_param('s',$username);
                $stmt->execute();
                $error=" Incorrect User Name Or Password ".$ip;
                // $error="Connection Failed, Incorrect User Name Or Password";

                //$error= "Incorrect username or password.";


                $stmt=$sqlcon->prepare("SELECT loginAttempt FROM WebPOS_user  WHERE username=?");
                $stmt->bind_param('s',$username);
                $stmt->execute();
                $result = $stmt->get_result();
                if($row=$result->fetch_row()) {
                    $attempt = $row[0];
                }
                if ($attempt >3)   {

                    $stmt=$sqlcon->prepare("UPDATE WebPOS_user SET userStatus=0 WHERE username=?  ");
                    $stmt->bind_param('s',$username);
                    $stmt->execute();
                    $error= "Your user account is disabled! Contact Admin".$ip;

                }


            }



        }

    }


?>
