<?php
  require('../model/database.php');
  require('../model/accounts.php');
  require('../model/todos.php');
  session_start();
  //if($_SESSION['login'] == true){
  //$email = filter_input(INPUT_POST, 'email');
    //$password= filter_input(INPUT_POST, 'password');  
    //$_SESSION['email'] = $email;
    //$_SESSION['password'] = $password;
    //}
  
  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
      $action = filter_input(INPUT_GET, 'action');
      if ($action == NULL) {
        $action = 'todo_list';
      }
  }
  if ($action == 'todo_list') {
   
    $oID = getID($_SESSION['email'],$_SESSION['password']);
    $firstName = getFirstName($_SESSION['email'],$_SESSION['password']);
    $lastName = getLastName($_SESSION['email'],$_SESSION['password']);
    $todos = get_t($oID);
    include('todo_list.php');
  } 
  
  else if ($action == 'add_form') {
    $oID = filter_input(INPUT_POST, 'todoID', FILTER_VALIDATE_INT);
    $e = filter_input(INPUT_POST, 'todoE');
    $_SESSION['oID'] =  $oID;
    $_SESSION['E'] = $e;
    include('add_todo.php');    
  } 
  else if ($action == 'add_todo') {
    //$email = filter_input(INPUT_POST, 'email');
    //$password = filter_input(INPUT_POST, 'password');
    $oID = $_SESSION['oID'];
    $e = $_SESSION['E'];
    $dd = filter_input(INPUT_POST, 'dd');
    $m = filter_input(INPUT_POST, 'm');
  
    
    if ($dd == NULL || $dd == FALSE || $m == NULL || $m == NULL) {
        $error = "Invalid todo data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        add($e, $oID, $dd, $m);
        header("Location: .?action=todo_list");
    }
  }  
  else if ($action == 'edit_form'){
    $iD = filter_input(INPUT_POST, 'todoID', FILTER_VALIDATE_INT);
    $dd = filter_input(INPUT_POST, 'todoDD');
    $m = filter_input(INPUT_POST, 'todoM');
    $_SESSION['id'] = $iD;
    include('edit.php');
  }
  
  else if ($action == 'update'){
    $iD = $_SESSION['id'];
    $dd = filter_input(INPUT_POST, 'todoDD');
    $m = filter_input(INPUT_POST, 'todoM');
    edit($iD,$dd,$m);
    header("Location: .?action=todo_list");
  }
  
  else if ($action == 'delete') {

    $todoID = filter_input(INPUT_POST, 'todoID', FILTER_VALIDATE_INT);
    
    if ($todoID == NULL || $todoID == FALSE) {
        $error = "Missing or incorrect todo id.";
        include('../errors/error.php');
    } else { 
        delete($todoID);
        header("Location: .?action=todo_list");
      }
  }
  
  else if ($action == 'finish'){
    $todoID = filter_input(INPUT_POST, 'todoID', FILTER_VALIDATE_INT);
    finish($todoID);
    header("Location: .?action=todo_list");
  
  }
  
 
?>