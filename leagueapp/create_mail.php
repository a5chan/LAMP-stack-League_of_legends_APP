<form id ="userform" action="send_email.php" onsubmit="return validateemail();" accept-charset="utf-8">
  <div class="form-group">
    
        <div id = "usersend" class="form-group hidden">
    <label style= "font-weight:bold;" for="touser">Send to:</label>
    <input type="text" onkeyup = "lookforuser()" onblur="validateuser()" class="form-control" id="touser" name = "touser" placeholder="Enter user here" required>
    <br></br>
     </div>
   
    <div class="ui-widget">
  <label for="usersuggestions">Suggestions: </label>
  <input id="usersuggestions">
</div>
      
    
    
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</div>
</FORM>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>


<script>
var availableTags = [];
var hi;
var list = [];
var answer;

function getType (val) {
    if (typeof val === 'undefined') return 'undefined';
    if (typeof val === 'object' && !val) return 'null';
    return ({}).toString.call(val).match(/\s([a-zA-Z]+)/)[1].toLowerCase();
}

function complete() {
   for(key in availableTags.testData) {
    list.push(availableTags.testData[key][0])
   }

    $( "#touser" ).autocomplete({
       
    });
  }
  
    function validateemail() {
    
    if($('#password').val() === $('#repassword').val() && $('#summonernamecheck').val() !== '' && $('#emailcheck').val() !== '')  
    {
        return true;
     } else { 
   
        return false;
     }    
}

function lookforuser(){

if($('#touser').val() === ''){
}else{
 //$.post( "lookup_user.php", { user: $('#touser').val() }, function(data) {
//availableTags = JSON.parse(data);
//hi = availableTags.testData[0][0];
//});

$.ajax({
     type: "POST",
     url: "lookup_user.php",
     data: {user:$('#touser').val()},
 dataType: "json",
 async: false,
 success: function(data){
    availableTags = data;
 }
});



complete();
    }
}


function validateuser(){
    
}
</script>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>