<?php
		if(isset($_POST['email'])&&isset($_POST['name']))
		{			
					$to =$_POST['email'];
					$name = $_POST['name'];
					$from    = "admin@eclectika.org";
					$otp=uniqid();
					$link='<a href="http://eclectika.org/quiz/verify.php?otp='.$otp.'" style="color:white;">VERIFY EMAIL ADDRESS</a>';

					//begin of HTML message
					$message = '<html>
				<head>
					<link href="http://fonts.googleapis.com/css?family=Merienda" rel="stylesheet" type="text/css">
				</head>
					<body style="font-family:Merienda;">
					<font color="Black">
					
					<img src="http://eclectika.org/test3/css/images/eclectikacover.jpg" style="width: 60%;"/>
					Dear <strong><em>'.$name.'</em></strong>, <br/>
					<p>Welcome to Central India&#39;s Largest Cultural &amp; Technical Festival, ECLECTIKA 2014, is starting on 21st, 22nd &amp; 23rd February &#39;14</p>
					<p>
					Thank You for Registering to Eclectika &#39;s Official Website, we will soon start Updating you on Eclectika&#39;s Progress.
					</p>
					<p>
					Complete the signup process for <a href="http://eclectika.org">Eclectika.org</a>, by clicking '.$link.';
					Or Enter the following when prompted :<span style="color:red">'.$otp.'</style>
					</p>
					<p>
					Follow us on our Social channels: <a href="http://www.facebook.com/eclectika.nitrr"><img src="http://eclectika.org/images/facebook.png" width="30" height="30"/></a>&nbsp; <a href="http://twitter.com/eclectika_nitrr"><img src="http://eclectika.org/images/twitter.png" width="30" height="30"/></a>
					</p>
					<br/>
					Regards,<br/>
					<strong>Admin</strong><br/>Webteam Eclectika<br/>
					Contact Us :<br/>09479143087 (Saket Poddar, 4th Year)
					<br/>09301522144 (Aditya Purandare, 3rd Year)
					</font>
					</html>';
					$subject="Team Eclectika's Welcome Mail";
					//end of message
					$headers = 'From: '.$from."\r\n".
						"Reply-To: aditya@eclectika.org \r\n".
						"Return-Path: admin@eclectika.org \r\n".
						"Content-Type: text/html; charset=iso-8859-1\n".
						'X-Mailer: PHP/'.phpversion();
					//echo $to.'<br/>'.$from.'<br/>'.$message.'<br/>'.$subject;
					//die();
					mail($to, $subject, $message, $headers);
					//Mail Code Ends Here
					header('location:/');
		}
?>

	<html>
	<head>
			<title>Quiz Signup Page</title>
			<style>
					p{display:block;}
			</style>
	</head>
	<body>
		<div id="signup">
			<fieldset>
			<legend>Signup</legend>
			<small><em>Note : All fields with * are compulsory</em></small>
			<form action="try.php" method="POST" name="signup" >
			<p>
					<label for="name">Name :</label>
					<input type="text" id="name" name="name" required="required"/>
				</p>
				<p>
					<label for="email">Email Address :</label>
					<input type="email" id="email" name="email" required="required"/>
				</p>
				<p><input type="submit" value="Send Eclectika Welcome Mail"/></p>
			</form>
</html>