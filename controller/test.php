<?php
  require('../model/database.php');
  require('../model/accounts.php');
  require('../model/todos.php');
  
  $email = "mjlee@njit.edu";
  $password = "1234";
  
  $oID = getID($email,$password);
  echo $oID;
  $todos = get_t($oID);
  echo $todos;
  
  foreach($todos as $todo){
  
  echo $todo['isdone'];
  
  }
  ?>