<?php

function get_http_response_code($url) {
    $headers = get_headers($url);
    return substr($headers[0], 9, 3);
}

$name =  $_POST['summonername'];

$api_key = '';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(get_http_response_code('http://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/'.$name.$api_key) != "404"){
    echo '<p style = "color:green">This name exists.</p>';
}else{
    echo '<p style = "color:red">This name does not exist. Please try again.</p>';
}

?>
