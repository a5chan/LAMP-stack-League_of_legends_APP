<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once("engine/database_functions.php");
include_once('engine/session_manager.php');

$email = $_POST['email'];
$password = $_POST['password'];
$password = hash('sha256', $password);
$hashpassword = gethashpassword($email, $password);

if($hashpassword >= 1){
   
    $information = getuserinformation($email);
    /*$_SESSION['email'] = $information['email'];
    $_SESSION['user_id'] = $information['user_id'];
    $_SESSION['summoner_name'] = $information['summoner_name'];
    */

    
    header('Refresh: 2;url=home.php');
}else{
    session_unset();
    session_destroy();
    header("Location: index.php?p=Failed");
}
?>
