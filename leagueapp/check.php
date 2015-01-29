<meta http-equiv="Content-Type" content="text/html; 
charset=UTF-8" />
<?php
include_once("engine/database_functions.php");


$email = $_POST['email'];
$emaillist= array();
$emaillist = getemaillist();

if(!(in_array($email, $emaillist))){
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo '<p style = "color:red">This email is not valid.</p>'.'<input type = "hidden" id = "emailcheck" value = ""></input>';
    }else{ 
    
  echo '<p style = "color:green">This email has not been used.</p>'.'<input type = "hidden" id = "emailcheck" value = "Fine"></input>';
    }
  
    }else{
    echo '<p style = "color:red">This email is already in use.</p>'.'<input type = "hidden" id = "emailcheck" value = ""></input>';
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>

