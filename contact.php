<?php
require('connect.php');
if($_POST)
{
	if(isset($_POST['name']) &&isset($_POST['email']) &&isset($_POST['con']) && isset($_POST['message']) && ($_POST['submit']==='Mail Us'))
	{
		$name=mysqli_real_escape_string($con, $_POST['name']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$mobile=mysqli_real_escape_string($con,$_POST['con']);
		$message=mysqli_real_escape_string($con,$_POST['message']);

		//echo $name.$email.$mobile.$message;
		if(!empty($_POST['name']) &&!empty($_POST['email']) &&!empty($_POST['con']) && !empty($_POST['message']))
		{
			$q24="INSERT INTO rpfeedback VALUES('','$name','$mobile','$email','$message')";
			mysqli_query($con, $q24);
		}
	}
}
?>
<html>
<head>
    <title>Quiz Home | Eclectika</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen,projection">
    <meta charset="UTF-8">
    <meta name="keywords" content="Eclectika 2014, Treasure Hunt, Eclectika, Online Game, Pre-Eclectika Event">
    <meta name="author" content="Aditya Purandare http://plus.google.com/+AdityaPurandare,
            Krishna Mohan Srivastava https://plus.google.com/112976571750925733219, Mansi Jain mansijain.nitrr@gmail.com">
    <meta name="robots" content="noindex,nofollow">
    <meta name="google" content="notranslate">
    <!--Dublin Core Start=-->
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
    <meta name="DC.Title" content="Treasure Hunt Home">
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
</head>

<body>
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
                        <td width="20%">&nbsp;</td>

                        <td width="10%">&nbsp;</td>

                        <td width="10%">&nbsp;</td>

                        <td width="20%" align="center">&nbsp;</td>
                    </tr>
                </table>
            </div>
        </div>
		<div id="container"><h1 style="font-family:cursive">Contact Us</h1>
        <table class="contact">
            <tr>
            	<td><div class="shrink pic"><img src="img/krishna.jpg" alt="Krishna Mohan Srivastava Pic"></div></td>

            <td><div class="shrink pic"><img src="img/aditya.jpg" alt="Aditya Purandare Pic"></div></td>

            <td><div class="shrink pic"><img src="img/mansi.jpg" alt="Mansi Jain Pic"></div></td>
            </tr>
            <tr>
            	<td colspan="3">&nbsp;</td>
            </tr>
            <tr>
            		<td class="bold big">Krishna Srivastava</td>
            		<td class="bold big">Aditya Purandare</td>
            		<td class="bold big">Mansi Jain</td>
            </tr>
            <tr>
            	<td class="big">krishna@eclectika.org</td>
            	<td class="big">aditya@eclectika.org</td>
            	<td class="big">mansijain.nitrr@gmail.com</td>
            </tr>
            <tr>
            	<td class="big">&nbsp;</td>
            	<td class="big">9301522144</td>
            	<td class="big">&nbsp;</td>
            </tr>
         </table>
        <div id="mail">
        			<h3>Have a Question or Want to know an Answer?</h3>
        			
        			<form action="contact.php" method="post">
        					<table cellpadding="5" cellspacing="5">
        							<tr>
        								<td><label for="name">Name:</label></td>
        								<td><input id="name" name="name" type="text" size="20" maxlength="40" required="required"/></td>
        							</tr>
        							<tr>
        								<td><label for="email">Email:</label></td>
        								<td><input id="email" name="email" type="email" size="20" maxlength="40" required="required"/></td>
        							</tr>
        							<tr>
        								<td><label for="con">Contact No.:</label></td>
        								<td><input id="con" name="con" type="text"  size="20" maxlength="40" required="required"/></td>
        							</tr>
        							<tr>
        								<td><label for="message">Message:</label></td>
        								<td><textarea id="message" name="message" rows="10" cols="20" required="required"></textarea></td>
        							</tr>
        							<tr>
        								<td colspan="2" align="right"><input type="submit" name="submit" value="Mail Us" /></td>
        							</tr>
        					</table>
        			</form>
</div>        </div>
         <footer style="margin-top:-10px"><?php include('footer.php'); ?></footer>
    </div>

</body>
</html>
