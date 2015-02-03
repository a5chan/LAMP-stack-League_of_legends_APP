

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

function query($query = null){
    echo $query;
mysqli_query($GLOBALS['databaseconn'], 'SET NAMES UTF8'); 
$result = mysqli_query($GLOBALS['databaseconn'],$query);
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


function getmultiepldataset($query = null, $fields = null){

$text = "";

$counter = 1;
  $result = mysqli_query($GLOBALS['databaseconn'],$query);
  $rows = mysqli_num_rows($result);
if(mysqli_num_rows($result)){
    $text = '{"testData":[';

    $first = true;

    $first = true;
    while($row=mysqli_fetch_row($result)){
        //  cast results to specific data types

        if($first) {
            $first = false;
        } else {
            $text .= ',';
        }
        $text .= json_encode($row);
    }
    $text .= ']}';
} else {
    echo '[]';
}


        return $text;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>