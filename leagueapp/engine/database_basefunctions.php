<meta http-equiv="Content-Type" content="text/html; 
charset=UTF-8" />

<?php
include_once("databaseconnect.php");

$databaseconn = openDB();

function getsinglevaluearray($field = null, $query = null){
   mysqli_query ($GLOBALS['databaseconn'],"set character_set_results='utf8'"); 
    
//execute the SQL query and return records
$result = mysqli_query($GLOBALS['databaseconn'],$query);
$array = array();
//display the results 
while($row = mysqli_fetch_array($result))
{
  array_push($array, $row[$field]);
}
    return $array;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>