<?php

$pass="saketpoddar";
$pass=md5($pass);
require('connect.php');
$str="INSERT INTO rpadmin VALUES('','saket',$pass)";
mysqli_query($con, $str);
echo 'Success';
//echo $pass;
?>