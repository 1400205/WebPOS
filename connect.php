<?php
//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'WebPOS');
//define('DB_PASSWORD', 'pass');
//define('DB_DATABASE', 'WebPOS');

define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'ba3dcb56418003');
define('DB_PASSWORD', '5055d853');
define('DB_DATABASE', 'BJTS');


  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$sqlcon=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


?>
