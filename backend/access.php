<?php
  session_start();
  if($_SESSION["admin_id"] == ''){
    header("Location: ../logout.php "); 
    exit();
  }
 $admin_id = $_SESSION["admin_id"];
  //print_r($_SESSION);
  //exit();
  include('../Connections/condb.php');
?>
