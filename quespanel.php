<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <title></title>
</head>

<body>
    <img src="img/panel_header.png" alt="">

    <div id="q1">
        <table id="ques" align="center" cellpadding="4">
            <?php
require('connect.php');
$username=$_SESSION['username'];
$q12="SELECT * FROM quizuser WHERE username='$username'";
$r12=mysqli_query($con, $q12);
$i=1;
$j=100;
$k=1;
$row=mysqli_fetch_array($r12);
$unlocked=36;
while($i<=$unlocked)
{
	$qno='q'.$i;
	if($i>20)
	{
		if($row['q100']=='1')
		{
		}
		else{break;}
	}
	if($row[$qno]=='0' || $row[$qno]=='1')
		//if($row[$qno]=== '0' || $row[$qno]==='1' || $row[$qno]==='2')
		{
		echo '<tr>
                                    <td class="disguise" data-field='.$i.'>
                                    <button id="'.$i.'" class="ques">Question '.$i.'</button>
                                    </td>';
		if($row[$qno]==='1')
			echo '<td>&#10003;</td>';
		else
			echo '<td>&nbsp;</td>';
		echo    '</tr>';
	}
	if($i==20||$i==30)
	{
		$qnum='q'.$j;
		if($row[$qnum]=== '0' || $row[$qnum]==='1')
		{
			echo '<tr>
                                                    <td class="disguise" data-field='.$i.'>
                                                    <button id="'.$j.'" class="ques">Task '.$k.'</button>
                                                    </td>';
			if($row[$qnum]=='1')
				echo '<td>&#10003;</td>';
			else
				echo '<td>&nbsp;</td>';
			$j++;
			echo '</tr>';
			$k++;
		}
	}
	$i++;
}
?>
        </table>
    </div><img src="img/panel_footer.png" alt="">
</body>
</html>
