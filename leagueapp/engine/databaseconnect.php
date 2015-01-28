<?php
$myServer = "127.0.0.1";
$myUser = "allen";
$myPass = "allen";
$myDB = "league"; 
$dbhandle = null;

function openDB(){
//connection to the database
  
$dbhandle = mysqli_connect ($GLOBALS['myServer'], $GLOBALS['myUser'], $GLOBALS['myPass'], $GLOBALS['myDB'])
  or die("Couldn't connect to SQL Server on $myServer"); 

if ($dbhandle->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select a database to work with
$selected =  mysqli_select_db ($dbhandle,  $GLOBALS['myDB'])
  or die("Couldn't open database  ".$GLOBALS['myDB']); 
return $dbhandle;

}


?>