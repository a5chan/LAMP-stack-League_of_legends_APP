/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
window.onload = init;
var interval;
function init()
{
	interval = setInterval(trackLogin,1000);
}
function trackLogin()
{
	var xmlReq = false;
	try {
	xmlReq = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
	try {
	xmlReq = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (e2) {
	xmlReq = false;
	}
	}
	if (!xmlReq && typeof XMLHttpRequest != 'undefined') {
	xmlReq = new XMLHttpRequest();
	}

	xmlReq.open('get', 'engine/session_manager.php', true);
	xmlReq.send(null);
          
        
	xmlReq.onreadystatechange = function(){
		if(xmlReq.readyState == 4 && xmlReq.status==200) {
                    console.log(xmlReq.responseText.trim());
			if(xmlReq.responseText.trim() === "1")
			{
				clearInterval(interval);
                              
				alert('You have been logged out.You will now be redirected to home page.');
				document.location.href = "index.php";
			}
		}
	}
}
});

