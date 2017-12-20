<?php

    require('../model/database.php');
    require('../model/accounts.php');
 
      
      $email = filter_input(INPUT_POST, 'email');
      $password= filter_input(INPUT_POST, 'password');
      $fname = filter_input(INPUT_POST, 'fname');
      $lname= filter_input(INPUT_POST, 'lname');
      $phone = filter_input(INPUT_POST, 'phone');
      $bday= filter_input(INPUT_POST, 'bday');
      $gender = filter_input(INPUT_POST, 'gender');
      newUser($email,$fname,$lname,$phone,$bday,$gender,$password);
      
      include("login.php");
      
    
    ?>