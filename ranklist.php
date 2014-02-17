<?php ob_start(); ?>
<img src="img/panel_header.png" alt="" width="180"/>
<table style="text-align:center;" id="leaders" align="center">
	<tr>
		<th>&nbsp;</th>
		<th>Username</th>
		<th>Score</th>
		<th>&nbsp;</th>
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


$q1="SELECT quizuser.username, score, status FROM quizuser, stuinfo WHERE quizuser.username=stuinfo.username ORDER BY score DESC, time ASC";
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
								<td>'.$row['score'].'</td>';
								if($row['status'])
								{	
									echo '<td><img src="img/green.png" alt="Renaissance Pirates Online Green" height="15" width="15"/></td>';
								}
								else
								{
									echo '<td><img src="img/red.png" alt="Renaissance Pirates Online Green" height="15" width="15"/></td>';
								}
							echo '</tr>';
	    }
		else
	   {
					echo '<tr>
								<td>'.($i+1).'</td>
								<td>'.$row['username'].'</td>
								<td>'.$row['score'].'</td>';
								if($row['status'])
								{	
									echo '<td><img src="img/green.png" alt="Renaissance Pirates Online Green" height="15" width="15"/></td>';
								}
								else
								{
									echo '<td><img src="img/red.png" alt="Renaissance Pirates Online Green" height="15" width="15"/></td>';
								}
							echo '</tr>';
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