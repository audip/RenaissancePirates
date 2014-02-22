<?php
require_once('solvemedialib.php');
require('connect.php');
ob_start();
session_start();
include('head.php');
require('connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <title></title>
</head>

<body>
    <form action="progress.php" method="post">
        <p style="text-align:center; margin 20px auto;"><input type="submit" value="Alphabetical" name="submit"> <input type="submit" value="Rank" name="submit"></p>
    </form>
<?php
if($_POST)
{
	if($_POST['submit']=='Alphabetical' || $_POST['submit']=='Rank')
	{
		$submit=$_POST['submit'];
		if($submit==='Alphabetical')
			$condition='ORDER BY username ASC';
		else if($submit==='Rank')
				$condition='ORDER BY score DESC, time ASC';
		$q1="SELECT * FROM quizuser ".$condition;
		$r1=mysqli_query($con, $q1);
		while($row=mysqli_fetch_assoc($r1))
		{
			$i=1;
			$j=1;
			echo '<table>
		                        <tr><th>Username</th><th>Score</th><th>Time</th>';
			while($j<=35)
			{
				echo '<th>Q'.$j.'</th>';
				$j++;
			}
			echo    '</tr>
		                        <tr><td rowspan="2">'.$user.'</td><td>'.$row['score'].'</td><td>'.$row['time'].'</td>';

			while($i<=30)
			{
				$qno='q'.$i;
				echo '<td>'.$row[$qno].'</td>';
				$i++;
			}
			echo '</tr><tr>';
			$i=1;

			while($i<=10)
			{
				$uid='u'.$i;
				echo '<td>'.$row[$uid].'</td>';
			}
			echo '</tr></table>';
		}
	}
	if($_POST['submit']=='Watch Progress')
	{
		$user=$_POST['username'];
		$q1="SELECT * FROM quizuser WHERE username='$user'";
		$r1=mysqli_query($con, $q1);
		$row=mysqli_fetch_assoc($r1);
		$i=1;
		$j=1;
		echo '<table>
	                        <tr><th>Username</th><th>Score</th><th>Time</th>';
		while($j<=30)
		{
			echo '<th>Q'.$j.'</th>';
			$j++;
		}
		echo    '</tr>
	                        <tr><td>'.$user.'</td><td>'.$row['score'].'</td><td>'.$row['time'].'</td>';

		while($i<=30)
		{
			$qno='q'.$i;
			echo        '<td>'.$row[$qno].'</td>';
			$i++;
		}

		echo '</tr></table>';
	}
}	
?>

    <div id="content" class="content">
        <form action="progress.php" method="post">
            <label for="username">Select a Username:</label> <select id="username" name="username">
                <?php
require_once('connect.php');
$str="SELECT username FROM quizuser";
$res=mysqli_query($con, $str);
while($row=mysqli_fetch_array($res))
{
	$username=$row['username'];
	echo '<option value="'.$username.'">'.$username.'</option>';
}
?>
            </select><br>
            <br>
            <input type="submit" value="Watch Progress" name="submit">
        </form>
    </div>

    <div id="footer" class="footer">
        <h5 style="color:white;">&copy; TEAM ECLECTIKA | All Rights Are Reserved.</h5>
    </div><?php ob_flush(); ?>
</body>
</html>
