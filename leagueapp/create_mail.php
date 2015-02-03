<?php
include_once("engine/session_functions.php");
include_once ("engine/session_manager.php");


$user_id = get_session_id();


?>
<form id ="userform" action="send_email.php" onsubmit="return validateemail();" accept-charset="utf-8">
  <div class="form-group">
    
     
             <div class="ui-widget">
    <label style= "font-weight:bold;" for="touser">Send to:</label>
    <input type="text" onkeyup = "lookforuser()" onblur="lookforuser()" onChange = "change()" id="touser" name = "touser" placeholder="Enter user here" required>
    <br></br>
     </div>
   
     <div id="summernote"></div>
  
     <input type = "hidden" id = "summoner_id" name = "summoner_id"></input>
     <input type="hidden" id = "summernotehtml" name = "summernotehtml"></input>
      <input type="hidden" id = "sender" name = "sender" value = "<?php echo $user_id?>"></input>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</div>
</FORM>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link href="summernote-master/summernote-master/dist/summernote.css" rel="stylesheet">
<script src="summernote-master/summernote-master/dist/summernote.min.js"></script>
<script>
var availableTags = [];
var hi;
var answer;
var sHTML;
var idselected;

$(document).ready(function() {
   $('#summernote').summernote({
            width: 800
        
        });
        
    
        
});

function getType (val) {
    if (typeof val === 'undefined') return 'undefined';
    if (typeof val === 'object' && !val) return 'null';
    return ({}).toString.call(val).match(/\s([a-zA-Z]+)/)[1].toLowerCase();
}

function complete(list) {

 $( "#touser" ).on( "autocompleteselect", function( event, ui ) {
      
       for(key in availableTags.testData) {
       if(availableTags.testData[key][0] === (ui.item.value)){
           idselected = availableTags.testData[key][2];
           break;
       }
   }
} );


    $("#touser").autocomplete({
      source: list

    });
       
  }
  
  
  
    function validateemail() {
    
    if($('#touser').val() !== '')  
    {
        if($('#touser').val() === '')
        {
            for(key in availableTags.testData) 
            {
               // console.log(availableTags.testData[key][0]);
               // console.log($('#touser').val())
                if(availableTags.testData[key][0] === $('#touser').val())
                {
                   idselected = availableTags.testData[key][2];
                   break;
                 }
            }
        }
   
        sHTML = $('#summernote').code();
        $('#summernotehtml').val(sHTML);
        
        $('#summoner_id').val(idselected);
        
        return true;
     } else { 
   
        return false;
     }    
}

function change(){
       for(key in availableTags.testData) {
       if(availableTags.testData[key][0] === $("#touser").val()){
           idselected = availableTags.testData[key][2];
           
           break;
       }
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

var list = [];
 for(key in availableTags.testData) {
    list.push(availableTags.testData[key][0])
   }

complete(list);
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