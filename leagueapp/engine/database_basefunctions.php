<meta http-equiv="Content-Type" content="text/html; 
charset=UTF-8" />

<?php
header('Content-Type: text/html; charset=utf-8');
include_once("databaseconnect.php");

$databaseconn = openDB();
mysqli_query ($GLOBALS['databaseconn'],"set character_set_results='utf8'");
mysqli_query($GLOBALS['databaseconn'],"SET NAMES 'utf8'"); 
mysqli_query($GLOBALS['databaseconn'],"SET CHARCTER SET utf8"); 

function getsinglevaluearray($field = null, $query = null){
   
    
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

function getsinglevalue($query = null, $field = null)
{
    $value = mysqli_query($GLOBALS['databaseconn'],$query);    
    while ($row = $value->fetch_assoc()) 
    {
    }
    return $row[$field];
}

function getnumberrows($query = null){
    $result = mysqli_query($GLOBALS['databaseconn'],$query); 
    $count=mysqli_num_rows($result);
    return $count;
}

function getdataset($query = null){
    $result = mysqli_query($GLOBALS['databaseconn'],$query);
   
    while($row = $result->fetch_assoc()) {
     return $row;
    }
   
}



function insertdata($query = null){
   mysqli_query($GLOBALS['databaseconn'], 'SET NAMES UTF8'); 

    mysqli_query($GLOBALS['databaseconn'],$query)
            or die ('failed'); 

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>