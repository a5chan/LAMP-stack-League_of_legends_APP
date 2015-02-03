
<?php
include_once ("database_basefunctions.php");



function look_up_user_names($user = null){
    $data = getmultiepldataset("select email, summoner_name, user_id from users where email LIKE '%".$user."' ORDER BY email ASC LIMIT 3", array('email', 'summoner_name', 'user_id'));
    return $data;
}


function validate_account($id = null){
    $data = query("update users set verified = 'Yes' where user_id = ".$id);    
}
function getemaillist(){
    $data = getsinglevaluearray('email', "select email from users" );
    return $data;
}

function gethashpassword($email = null, $password = null){
    $data = getnumberrows("select * from users where pass = '".$password."' and email = '".$email."' and verified = 'Yes'");
    return $data;
}

function getuserinformation($email = null){
    $data = getdataset("select user_id, email, summoner_name from users where email = '".$email."'");
    
    return $data;
    
}


function inputuser($password = null, $email = null, $summoner_name = null, $region = null, $user_id = null){
$password = hash("sha256", $password);
query("insert into users (pass, email, summoner_name, region, user_id) VALUES ('".$password."', '".$email."', '".$summoner_name."', '".$region."', ".$user_id.")");
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
