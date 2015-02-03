<?php
include_once ("engine/database_functions.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id = $_GET['summoner_id'];
$html = $_GET['summernotehtml'];
$from = $_GET['sender'];

echo $id;
echo $html;
echo $from;

insert_message($from, $id, $html);
header('Refresh: 2;url=user_mail.php');
?>