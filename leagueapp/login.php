<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once("engine/database_functions.php");


$email = $_GET['email'];
$password = $_GET['password'];
$password = hash('sha256', $password);
$hashpassword = gethashpassword($email, $password);
echo $hashpassword;
if($hashpassword >= 1){
    echo 'Success';
    header('Refresh: 2;url=home.php');
}else{
    header("Location: {$_SERVER['HTTP_REFERER']}");
}
?>