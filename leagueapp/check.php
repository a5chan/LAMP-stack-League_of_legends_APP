<?php
include_once("engine/database_functions.php");


$name = getparameter('user_name');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$userlist = getusernamelist();
echo ($userlist[0]);
?>

