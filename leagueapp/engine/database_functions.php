
<meta http-equiv="Content-Type" content="text/html; 
charset=UTF-8" />
<?php
include_once ("database_basefunctions.php");



function getemaillist(){
    $data = getsinglevaluearray('email', "select email from users" );
    return $data;
}

function gethashpassword($email = null, $password = null){
    
    $data = getnumberrows("select * from users where pass = '".$password."' and email = '".$email."'");
    return $data;
}


function inputuser($password = null, $email = null, $summoner_name = null, $region = null, $user_id = null){
$password = hash("sha256", $password);
insertdata("insert into users (pass, email, summoner_name, region, user_id) VALUES ('".$password."', '".$email."', '".$summoner_name."', '".$region."', ".$user_id.")");
}

function getuseridlist(){
    $data = getsinglevaluearray('user_id', "select user_id from users" );
    return $data;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
