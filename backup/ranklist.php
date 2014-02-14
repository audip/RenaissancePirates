<?php ob_start(); ?>
<img src="img/panel_header.png" alt="" />
<table style="text-align:center;" id="leaders" align="center">
	<tr>
		<th>&nbsp;</th>
		<th>Username</th>
		<th>Score</th>
	</tr>
	<?php
require('connect.php');

if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
else
{
	//Proceed with Game Home
}


$q1="SELECT username, score FROM quizuser ORDER BY score DESC";
$r1=mysqli_query($con, $q1);
$i=0;
while($i<20 && $i<mysqli_num_rows($r1))
{
	$row=mysqli_fetch_array($r1);
		if($i%2==0)
		{
					echo '<tr>
								<td>'.($i+1).'</td>
								<td>'.$row['username'].'</td>
								<td>'.$row['score'].'</td>
							</tr>';
	    }
		else
	   {
					echo '<tr>
								<td>'.($i+1).'</td>
								<td>'.$row['username'].'</td>
								<td>'.$row['score'].'</td>
							</tr>';
	    }
	$i++;
}
/*while($i<20){
		echo '<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>';
		$i++;
}*/

ob_flush();
?>
</table>
<img src="img/panel_footer.png" alt="" />