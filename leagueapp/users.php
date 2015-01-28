<form id ="contactform" action="process_contact.php">
  <div class="form-group">
    <label style= "font-weight:bold;" for="firstname">User Name</label>
    <input type="username" onchange = "check()" class="form-control" id="username" name = "username" required placeholder="Enter user name here">
    <br></br>
    
        <label style= "font-weight:bold;" for="lastname">Last Name</label>
    <input type="lastname" class="form-control" id="name" name = "lastname" required placeholder="Enter name here">
    <br></br>

    <label style= "font-weight:bold;display:block;" for="comments">Comments here!</label>
<textarea id = "comments" rows="4" cols="50" name = "comments"  required placeholder = "Enter comments">
</textarea>
    <br><br/>
     <div class="checkbox">
 <label style= "font-weight:bold;" for="checkbox">Do you want me to contact you back? (Yes/No)</label>

      <input id = "checkbox" style = "margin-left:20px;" type="checkbox">
  </div>
    <br></br>
     <div id = "emailgroup" class="form-group hidden">
    <label style= "font-weight:bold;" for="email">Email</label>
    <input type="email" class="form-control" id="email" name = "email" placeholder="Enter email here">
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
        }); 
        
function check(){
    console.log('adsdssd');
   $.post( "check.php", function() {
  alert( "success" );
})
  .done(function(data) {
    alert( data );
  })
  .fail(function() {
    alert( "error" );
  })
  .always(function() {
    alert( "finished" );
});
}
    

</script>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>

