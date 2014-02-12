<?php
	ob_start();
	require("connect.php");
	if(!isset($_SESSION['username']))
    {
        header('location:login.php');
    }
    else
    {
        //Proceed with Game Home
    }

	$username=$_SESSION['username'];
	$q8="SELECT name, score FROM stuinfo, quizuser WHERE stuinfo.username=quizuser.username AND quizuser.username='$username'";
	$r8=mysqli_query($con, $q8);
	if(mysqli_num_rows($r8)==1)
	{
		$row=mysqli_fetch_array($r8);
		$name=$row['name'];
		$score=$row['score'];
		$q9="SELECT count(id) as rank FROM quizuser WHERE score>$score";
		$r9=mysqli_query($con,$q9);
		$row1=mysqli_fetch_array($r9);
		$rank=$row1['rank']+1;
	}

?>
<ul id="navbar">
	<li id="home"><a href="home.php">Home</a></li>
	<li id="profile"><a href="profile.php">My Profile</a></li>
	<li id="play"><a href="home.php">Rejoice da Renaissance</a></li>
	<li id="rules"><a href="rules.php">Rules</a></li>
	<li id="contacts"><a href="contact.php">Contacts</a></li>
</ul>
<div id="userdetails">
<table width="80%">
	<tr>
		<td width="25%">Name - <span class="bold"><?php echo $name; ?></span></td>
		<td width="10%">Rank - <span class="bold"><?php echo $rank; ?></span></td>
		<td width="10%">Score - <span class="bold"><?php echo $score; ?></span></td>
		<td width="15%" align="center"><span class="bold "><a href="logout.php" class="logout">LOGOUT</a></span></td>
	</tr>
</table>
</div>