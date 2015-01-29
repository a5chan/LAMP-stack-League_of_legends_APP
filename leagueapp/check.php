<?php
include_once("engine/database_functions.php");


$name =  $_POST['user_name'];
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$userlist = getusernamelist();

if(in_array($name, $userlist)){
   echo '<p style = "color:red">This name already exists in the database</p>';
}else{
    echo '<p style = "color:green">This name is OK!</p>';
}

?>

