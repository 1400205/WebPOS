<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 08/08/2016
 * Time: 11:41
 */

$_SESSION['_token']=bin2hex(random_bytes(16));


if($_SERVER['REQUEST_METHOD']=='POST'){

    if (!isset($_POST['_token']) || $_POST['_token']!==$_SESSION['_token']){
        //die( $error='Invalid CSRF token');
        echo $error='Invalid CSRF token';
    }
}