<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 08/08/2016
 * Time: 11:41
 */
session_start();




if($_SERVER['REQUEST_METHOD']=='POST'){

    if (!isset($_POST['_token']) || $_POST['_token']!==$_SESSION['_token']){
        //die( $error='Invalid CSRF token');
        echo $error='Invalid CSRF token';
    }
}

$_SESSION['_token']=bin2hex(openssl_random_pseudo_bytes(16));