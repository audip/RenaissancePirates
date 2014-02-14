<?php
  ob_start();
  session_start();
  
  require_once('connect.php');
  $username=$_SESSION['username'];
  $str="UPDATE stuinfo SET status='0' WHERE username='$username'";
  mysqli_query($con, $str);
  
  session_destroy();
  
  $session=array();
  
  header('location:index.php');
  ob_flush();
?>