<?php 
	ob_start();
?>
<img src="img/panel_header.png" alt="" />
<table id="ques" align="center" cellpadding="4">
<?php
	require('connect.php');
	$username=$_SESSION['username'];
	$q12="SELECT * FROM quizuser WHERE username='$username'";
	$r12=mysqli_query($con, $q12);
	$i=1;
	$row=mysqli_fetch_array($r12);
	while($i<=12)
	{
		$qno='q'.$i;
		if($row[$qno]=== '0' || $row[$qno]==='1')
		{echo '<tr>
						<td class="disguise" data-field='.$i.'>
						<button id="'.$i.'" class="ques">Question'.$i.'</button>
						</td>';
						if($row[$qno]==='1')
							echo '<td>&#10003;</td>';
						else
							echo '<td>&nbsp;</td>';
		echo	'</tr>';
		}
		//
		/*if($row['q'.$i.]=='0')
		{
			echo 
		}*/
		//question.php?var=value
		//
		$i++;
	}
?>
</table>
<img src="img/panel_footer.png" alt="" />