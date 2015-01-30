<?php
include_once("engine/database_functions.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$password = $_GET['password'];
$email = $_GET['email'];
$summoner_name = $_GET['summonername'];
$region = $_GET['regions'];
$idlist = getuseridlist();
$id = 0;
do {
    $id = mt_rand(100000, 999999);
} while (in_array($id, $idlist));

        
inputuser($password, $email, $summoner_name, $region, $id);

echo "<h1>Thanks for registering!</h1>";

mail($email, 'Validation link for League of Legends application', 'Thanks for registering! Click on this link to activate your account http://localhost/leagueapp/activate.php?id='.$id);

header('Refresh: 2;url=index.php');
?>