<?php

	$host="localhost";
	$user="eclecbja";
	$pass="birds@ecweb14";
	$dbname="eclecbja_eclectika2014";

	$con = mysqli_connect($host, $user, $pass, $dbname);

	if(!$con){
		echo 'Not Connected. Please contact admin@eclectika.org';
	}

?>