<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title>League of Legends Application</title>
      
    </head>
      <link href="leaguecss/league.css" rel="stylesheet"></link>
    <body>
      <a href="users.php" class="myButton">No Account Yet? Come Sign Up!</a>
      Sign in here!
      
      <form action="login.php" method = "POST" accept-charset="utf-8"> 
     <input type="email" class="form-control" id="email" name = "email" required placeholder="Enter email here">
     </input>
     <input type="password" class="form-control" id="password" name = "password" required placeholder="Enter password here">
     </input>
     <div id = "error"></div>
       <button type="submit" class="btn btn-default">Submit</button>
       
      </form>
     <?php
     if(isset($_GET['p'])){
     echo 'Invalid password or email or your account has not been validated.';      
     } 
     ?>
    </body>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
      <script src = "js/league.js"></script>    
</html>
