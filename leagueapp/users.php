<form id ="userform" action="process_user.php" onsubmit="return validateForm();">
  <div class="form-group">
    <label style= "font-weight:bold;" for="username">User Name</label>
    <input type="username" onkeyup = "check()" class="form-control" id="username" name = "username" required placeholder="Enter user name here">
    <div id = "erroruser"></div>
    <br></br>
    
        <label style= "font-weight:bold;" for="password">Password</label>
    <input type="password" class="form-control" id="password" name = "password" required placeholder="Enter password here">
    <br></br>
    
      <label style= "font-weight:bold;" for="repassword">Retype Password</label>
    <input type="password" class="form-control" id="repassword" name = "repassword" required placeholder="Retype password here">
    <br></br>
   
     <div id = "emailgroup" class="form-group hidden">
    <label style= "font-weight:bold;" for="email">Email</label>
    <input type="email" class="form-control" id="email" name = "email" placeholder="Enter email here">
    <br></br>
     </div>

    
    <div id = "summonerboxes" class="form-group hidden">
    <label style= "font-weight:bold;" for="summonername">Summoner Name</label>
    <input type="summonername" class="form-control" id="summonername" name = "summonername" placeholder="Enter summoner name here">
    <div id = "errorsummoner"></div>
    <br></br>
     </div>
 
    
    
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


if($('#username').val() === ''){
  $('#erroruser').html('');
}else{
  
  $.post( "check.php", { user_name: $('#username').val() }, function(data) {
  $('#erroruser').html(data);
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
    
    if(($('#password').val() === $('#repassword')))  {
        return false;
     } else { 
        return true;
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

