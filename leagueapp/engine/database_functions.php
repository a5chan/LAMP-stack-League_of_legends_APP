
<meta http-equiv="Content-Type" content="text/html; 
charset=UTF-8" />
<?php
include_once ("database_basefunctions.php");



function getusernamelist(){
 
    $data = getsinglevaluearray('user_name', "select user_name from users" );
    return $data;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
