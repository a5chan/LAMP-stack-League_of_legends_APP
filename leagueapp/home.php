<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("engine/session_functions.php");
include_once ("engine/session_manager.php");

$user_id = get_session_id();
$summoner_name = get_session_name();
?>

<p>Welcome to your own portal! <?=$summoner_name?> </p>

<a id = "logoutbutton" href = "logout.php">Log out</a> 





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script src = "js/league.js"></script>  
<script type="text/javascript" src="js/sitetimer.js"></script>

