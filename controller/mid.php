<?php
    
    session_start();
   
      $email = filter_input(INPUT_POST, 'email');
      $password= filter_input(INPUT_POST, 'password');  
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      include("index.php");
  
    ?>