<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("engine/session_manager.php");

session_unset();
session_destroy();

echo "Logging out";

header('Refresh: 2;url=index.php');

?>