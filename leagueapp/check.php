<meta http-equiv="Content-Type" content="text/html; 
charset=UTF-8" />
<?php
include_once("engine/database_functions.php");


$name =  $_POST['user_name'];
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$userlist = getusernamelist();
echo $userlist[1];
if(strlen($name) > 5)
{
    if(in_array($name, $userlist)){
       echo '<p style = "color:red">This name already exists in the database</p>'.'<input type = "hidden" id = "usernamecheck" value = ""></input>';
    }else{
        echo '<p style = "color:green">This name is OK!</p>'.'<input type = "hidden" id = "usernamecheck" value = "Fine"></input>';
    }
}else{
   echo '<p style = "color:red">Must more more than 5 characters</p>'.'<input type = "hidden" id = "usernamecheck" value = ""></input>';
}

?>

