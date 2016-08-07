<?php
/**
 * Created by PhpStorm.
 * User: prosper
 * Date: 30/05/2016
 * Time: 01:45
 */
$error="";
$msg="";
$personid =0;
$gettilte="";
$result="";
$resultText="";
$resultTextPhoto="";
$target_file = "";

// File information
$uploaded_name = "";
$uploaded_ext = "";
$uploaded_size = "";
$uploaded_tmp = "";
$userID=0;
$getcompanyID=1;
$getcompayName="";
$companylogo="";

$locationID=0;
$productName="";
$selctedProduct=0;
$resultTextXSS="";

/*function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}*/



