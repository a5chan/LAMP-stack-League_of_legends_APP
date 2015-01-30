<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
 
function timeCheck()
{
    if(!isset($_SESSION['isLoggedIn']) || !($_SESSION['isLoggedIn']))
    {
      
        $_SESSION['isLoggedIn'] = true;
	/////////////////////////////////////////
	$_SESSION['timeOut'] = 5;
	$logged = time();
	$_SESSION['loggedAt']= $logged;
    }
	else
	{
          
		// user is logged in
		
		$hasSessionExpired = checkIfTimedOut();
		if($hasSessionExpired)
		{
			session_unset();
			return true;
		}
		else
		{
			return false;
		}
	}
}

function checkIfTimedOut()
{
	$current = time();// take the current time
	$diff = $current - $_SESSION['loggedAt'];
	if($diff > $_SESSION['timeOut'])
	{
		return true;
	}
	else
	{
		return false;
		$_SESSION['loggedAt']= time();// update last accessed time
	}
}

?>


