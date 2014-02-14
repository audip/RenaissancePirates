<?php

	$host="localhost";
	$user="root";
	$pass="";
	$dbname="ep";

	$con = mysqli_connect($host, $user, $pass, $dbname);

	if(!$con){
		echo 'Not Connected. Please contact admin@eclectika.org';
	}

?>