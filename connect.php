<?php
//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'WebPOS');
//define('DB_PASSWORD', 'pass');
//define('DB_DATABASE', 'WebPOS');

define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'ba3dcb56418003');
define('DB_PASSWORD', '5055d853');
define('DB_DATABASE', 'BJTS');


//include ("myglobal.php");

//$error="Error: Check your your permissions";
//$mysqldb='WebPOS';

  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

//class ServerException extends Exception{}
//class DatabaseException extends  Exception{}
//interface ServerThrowable extends Throwable {}
//try {
  //  if(!@mysqli_connect($db)){
    //    throw new ServerException('Could not connect to server');
    //}else if   (!@mysali_select_db($mysqldb)) {
   //     throw new DatabaseException('Could not connect to database');
   // }

//}catch(ServerException $e){
//$error="Error".$e->getMessage();
 //} catch (DatabaseException $e){
 //   $error="Error".$e->getMessage();
//}catch(ServerThrowable $t){
 //   $error="Error".$t->getMessage();
//}


?>
