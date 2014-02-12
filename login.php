<?php
ob_start();
session_start();
require('connect.php');
if(isset($_SESSION['username']))
{
	header('location:home.php');
}
else
{
}
if($_POST)
{
	require_once("solvemedialib.php");
	$privkey="arSuUTJHqxu1uarsXvuO6UyluliVw9Dq";
	$hashkey="6CKg17T7.VmCnXxRZ3ARYmCEBP0Oit6-";
	$solvemedia_response = solvemedia_check_answer($privkey,
		$_SERVER["REMOTE_ADDR"],
		$_POST["adcopy_challenge"],
		$_POST["adcopy_response"],
		$hashkey);
	if (!$solvemedia_response->is_valid) {
		//handle incorrect answer
		print "Error: ".$solvemedia_response->error;
	}
	else {
		//process form here
		if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['submit']))
		{
			$username=mysqli_real_escape_string($con, $_POST['username']);
			$password=mysqli_real_escape_string($con, $_POST['password']);
			$email=$username;

			if(!empty($username)&&!empty($password))
			{
				//$password=md5($password);
				$str="SELECT username, password, id, email FROM stuinfo WHERE username='$username' OR email='$email'";
				$result = mysqli_query($con, $str);
				if(mysqli_num_rows($result)==1)
				{
					/*if (!$result) {
  					printf("Error: %s\n", mysqli_error($con));
    					exit();
				}*/
					$row=mysqli_fetch_array($result);
					if(($username===$row['username'] || $email===$row['email']) && $password===$row['password'])
					{
						$_SESSION['username']=$row['username'];
						$_SESSION['userid']=$row['id'];
						echo 'Logged In';
						header('location:signin.php');
					}
				}
			}
		}
	}
}
//include the Solve Media library


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <title>Renaissance Pirates!</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <hr>

    <div class="wrapper">
        <div id="header" style="float:left">
            <ul id="navbar">
				<li id="home"><a href="home.php">Home</a></li>
				<li id="profile"><a href="profile.php">My Profile</a></li>
				<li id="play"><a href="home.php">Renaissance Pirates</a></li>
				<li id="rules"><a href="rules.php">Rules</a></li>
				<li id="contacts"><a href="contact.php">Contacts</a></li>
			</ul>
			<div id="userdetails">
				<table width="80%">
					<tr>
						<td width="20%"><span class="bold">&nbsp;</span></td>
						<td width="10%"><span class="bold">&nbsp;</span></td>
						<td width="10%"><span class="bold">&nbsp;</span></td>
				</table>
			</div>
        </div>

		<center>
		<h1> LOGIN PANEL </h1>
		<br /> <br />
            <form action="login.php" method="post" id="signin">
                <table>
                    <tr>
                        <td><strong><label for="username"><sup>*</sup>Username/Email :</label></strong></td>

                        <td><input type="text" name="username" id="username" size="20" maxlength="30" autofocus="" required="required" tabindex="1" accesskey="u"></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="3"><small><em>Username/Email used to signup for <a href="http://eclectika.org" target="_blank">Eclectika.org</a></em></small></td>
                    </tr>
					
                    <tr>
                        <td><strong><label for="password"><sup>*</sup>Password :</label></strong></td>

                        <td><input type="password" name="password" id="password" size="20" maxlength="30" required="required" tabindex="2" accesskey="p"></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="3"><small><em>Password of min 6-15 characters</em></small></td>
                    </tr>
					<tr>
						<td colspan="3">&nbsp;</td>
					</tr>
                    <tr>
                        <td>
                        <script type="text/javascript">
	var ACPuzzleOptions = {
                tabindex:   3,
				lang:	    'en'
	};
  </script><?php
							require_once("solvemedialib.php");
							echo solvemedia_get_html("qjmGRXOO9Bq7AfRhBy22ue7pPkcBCGIH"); //outputs the widget
?></td>
                    </tr>

                    <tr>
                        <td colspan="3" align="center"><input type="submit" name="submit" value="LOGIN"></td>
                    </tr>
                </table><?php
//require_once("solvemedialib.php");   //include the Solve Media library
//echo solvemedia_get_html("qjmGRXOO9Bq7AfRhBy22ue7pPkcBCGIH"); //outputs the widget
?>
            </form>Not Registered Yet? &nbsp;<button type="button" class="normal"><a href="signup.php" class="normal">Signup</a></button>
		 <footer>
	        	<?php include('footer.php'); ?>
        </footer>
    </div><?php ob_flush(); ?>
	</center>
</body>
</html>
