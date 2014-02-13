<?php

  session_start();
  session_destroy();
  
  $session=array();
  header('location:index.php');

?>