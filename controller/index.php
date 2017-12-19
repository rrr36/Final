<?php
  require('../model/database.php');
  require('../model/accounts.php');
  require('../model/todos.php');
  
  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
      $action = filter_input(INPUT_GET, 'action');
      if ($action == NULL) {
        $action = 'todo_list';
      }
  }
  if ($action == 'todo_list') {
    $oID = getID($email,$password);
    $firstName = getFirstName($email,$password);
    $lastName = getLastName($email,$password);
    $todo = get_t($oID);
    include('todo_list.php');
  } 
  
  else if ($action == 'add_form') {
    include('add_todo.php');    
  } 
  else if ($action == 'add_todo') {
    $oID = get_t($email, $password);
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
    $oID = filter_input(INPUT_POST, 'todoID', FILTER_VALIDATE_INT);
    $dd = filter_input(INPUT_POST, 'todoDD');
    $m = filter_input(INPUT_POST, 'todoM');
    include('edit.php');
  }
  
  else if ($action == 'update'){
    $oID = filter_input(INPUT_POST, 'todoID', FILTER_VALIDATE_INT);
    $dd = filter_input(INPUT_POST, 'todoDD');
    $m = filter_input(INPUT_POST, 'todoM');
    update($iOD,$dd,$m);
    header("Location: .?action=todo_list");
  }
  
  else if ($action == 'delete') {
    $todoID = filter_input(INPUT_POST, 'todoID', FILTER_VALIDATE_INT);
    
    if ($todoId == NULL || $todoId == FALSE) {
        $error = "Missing or incorrect todo id.";
        include('../errors/error.php');
    } else { 
        delete($product_id);
        header("Location: .?todoID=$todoID");
      }
  }
  
  else if ($action == 'finish'){
    finish();
    header("Location: .?action=todo_list");
  
  }
  
 
?>