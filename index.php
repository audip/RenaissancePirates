<?php

if(isset($_POST['submit']))
{

header('location:login.php');

}

?>

<html>
	<head>
		<title> Renaissance Pirates </title>
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content="120;index.php"/>
		<meta name="keywords" content="Eclectika 2014, Treasure Hunt, Eclectika, Online Game, Pre-Eclectika Event">
		<meta name="author" content="Aditya Purandare http://plus.google.com/+AdityaPurandare,
				Krishna Mohan Srivastava https://plus.google.com/112976571750925733219, Mansi Jain mansijain.nitrr@gmail.com">
		<meta name="robots" content="noindex,nofollow">
		<meta name="google" content="notranslate"><!--Dublin Core Start=-->
		<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
		<meta name="DC.Title" content="Renaissance Pirates">
		<meta name="DC.Title" content="Online Treasure Hunt">
		<meta name="DC.Title" content="Eclectika Online Game">
		<meta name="DC.Creator" content="Aditya Purandare">
		<meta name="DC.Creator" content="Krishna Mohan Srivastava">
		<meta name="DC.Creator" content="Mansi Jain">
		<meta name="DC.Subject" content="Eclectika's Online Game for creating a buzz & fever amongst Students ">
		<meta name="DC.Description" content="Pre-Eclectika Event, launched just before Eclectika for Rampaging an Eclectika Fever in Raipur & vicinity.">
		<meta name="DC.Publisher" content="Team Eclectika">
		<meta name="DC.Date" content="2014-01">
		<meta name="DC.Type" content="InteractiveResource">
		<meta name="DC.Language" content="en">
		<meta name="DC.Coverage" content="India"><!--Dublin Core End-->
		
		<style>
		
		body {
	background-image:url(img/indbg.jpg);
	font-family: 'high_tower_textregular',cursive,sans-serif;
	font-size: 17px;
}


.wrap {
	background-image:url(img/renpi2.jpg);
	background-size:cover;
	background-repeat : no-repeat;
	width:80%;
	margin:0 0 auto;
	height : 100%;
	padding : 0;
}

.submit{
	padding-top: 50%;
	float : right;
	height : 20%
}

.intro{
	width : 40%;
	height : 30%;
	color : #e0c947;
	float :right;
	padding-top : 15%;
	padding-left : 40%;
	position : absolute;
	text-align : center;
	font-size:22px;
	}

input[type=submit]
{
	background-image:url(img/indbg.jpg);
	border:0;
	padding:10px 20px;
	color:#e0c947;
	font-size:20px;
	text-decoration:underline;
	pointer : cursor;
}
input[type=submit]:hover{
	cursor:pointer;
	color:#fac963;
}
			
		</style>
		
	</head>
	
	<body background="img/indbg.jpg">
		<div class="wrap">
		<div class="intro">
			<p><em><strong>" Pirates ain't fer bein' shy. Stand tall, me hearties, and be counted! "</strong></em></p>
		</div>
		<div class="submit">
			<form action="index.php" method="post">
				<input type="submit" name="submit" value="Become A Pirate!" />
			</form>
		</div>
		</div>
	
	</body>

</html>