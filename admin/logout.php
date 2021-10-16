<?php session_start(); ?>

<?php

require_once('../config.php');
 //require_once(BL.'functions\validate.php');
 //echo BL.'functions\validate.php'

  if(isset($_SESSION['admin_name'])){
      session_destroy();
    header('Location:'.BUA.'login.php');
  }else{
    header('Location:'.BU);
  }


?>
