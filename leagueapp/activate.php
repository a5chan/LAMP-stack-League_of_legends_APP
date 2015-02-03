<?php
include_once("engine/database_functions.php");

$id = $_GET['id'];

validate_account($id);


echo '<h1>You are now validated! Log in to start using lolapp</h1>';

header('Refresh: 2;url=index.php');

?>
