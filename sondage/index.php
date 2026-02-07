<?php
    session_start();
    $role=$_GET['role']??null;
    if(isset($role)&&$role=='admin'){
     include_once("controller/controllerAdmin.php"); 
      $control = new Controller();
      $control->control();
    }
    else{
    include_once("controller/controllerVue.php");
    $control = new Controller();
    $control->control();
    }
    
?>
 