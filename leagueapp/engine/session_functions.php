<?php
include_once("session_manager.php");

function get_session_id(){

    return $_SESSION['user_id'];
}

function get_session_name(){
    return $_SESSION['summoner_name'];
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>