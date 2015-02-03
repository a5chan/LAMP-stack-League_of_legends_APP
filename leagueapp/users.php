<!--...<meta http-equiv="Content-Type" content="text/html; 
charset=UTF-8" /> -->

<form id ="userform" action="process_user.php" onsubmit="return validateForm();" accept-charset="utf-8">
  <div class="form-group">
    
 
   
      
     <div id = "emailgroup" class="form-group hidden">
    <label style= "font-weight:bold;" for="email">Email</label>
    <input type="email" onkeyup = "check()" onblur="check()" class="form-control" id="email" name = "email" placeholder="Enter email here" required>
    <br></br>
     </div>
      <div id = "erroremail"></div>
      
          <label style= "font-weight:bold;" for="password">Password</label>
    <input type="password" class="form-control" id="password" name = "password" required placeholder="Enter password here">
    <br></br>
    
      <label style= "font-weight:bold;" for="repassword">Retype Password</label>
    <input type="password" class="form-control" id="repassword" name = "repassword" required placeholder="Retype password here" required>
    <br></br>

    
    <div id = "summonerboxes" class="form-group hidden">
    <label style= "font-weight:bold;" for="summonername">Summoner Name</label>
    <input type="summonername" onblur = "checksummoner();" class="form-control" id="summonername" name = "summonername" placeholder="Enter summoner name here" required>
    <div id = "errorsummoner"></div>
    <br></br>
     </div>
    
     <select id = "regions" name = "regions" class="form-control">
            <option value= "NA">North America</option> 
            <option value= "EU">Europe</option>
            <option value= "CH">Asia</option>
              
     </select>
 
    
    
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</div>
</FORM>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
var typingTimer;                //timer identifier
var doneTypingInterval = 500;  //time in ms, 5 second for example

//on keyup, start the countdown


     $(document).ready(function() {
         
     $('#sumonername').bind('keypress', function (event) {
    var regex = new RegExp("^[a-zA-Z0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
       event.preventDefault();
       return false;
    }
    });
         
            // bind 'myForm' and provide a simple callback function 
        $('#checkbox').click(function(){
      if($('#checkbox').is(":checked")){
          $('#emailgroup').removeClass("hidden");
          $('#email').addClass("required");
          
      }else{
         
          $('#emailgroup').addClass("hidden");
          $('#email').val('');
               $('#email').removeClass("required");
      }
    });
    
    
    $('#summonername').keyup(function(){
    clearTimeout(typingTimer);
    typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown 
$('#summonername').keydown(function(){
    clearTimeout(typingTimer);
});
    
        }); 
        
function check(){
      
if($('#email').val() === ''){
  $('#erroremail').html('');
}else{
  
  $.post( "check.php", { email: $('#email').val() }, function(data) {
  $('#erroremail').html(data);
});
}
    
}



//user is "finished typing," do something
function doneTyping () {

   if($('#summonername').val() === ''){
  $('#errorsummoner').html('');
}else{
  $.post( "checksummoner.php", { summonername: $('#summonername').val() }, function(data) {
  $('#errorsummoner').html(data);
});
}



}

function validateForm() {
    
    if($('#password').val() === $('#repassword').val() && $('#summonernamecheck').val() !== '' && $('#emailcheck').val() !== '')  
    {
        return true;
     } else { 
   
        return false;
     }    
}

function wipeout(){
 $('#erroruser').html('');
 $('#errorsummoner').html('');
}

    

</script>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>

