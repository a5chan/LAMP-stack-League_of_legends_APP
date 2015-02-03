<?php
include_once("engine/database_functions.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class User {
    public $email= "";
    public $summoner_name  = "";
    public $user_id = "";
}
 


$user = $_POST['user'];

$user_list = look_up_user_names($user);

$i = 0;
$j = 0;


//$user_list =  str_replace("\\","", $user_list);
echo $user_list;
//echo json_encode($user_list);

//echo json_encode($user_list);



?>