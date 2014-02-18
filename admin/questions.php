<?php
require_once('solvemedialib.php');
require('connect.php');
ob_start();
session_start();
include('head.php');
?>

        <div id="content" class="content">
	<table width="90%">
		<tr>
			
			<th>Ques. No.</th>
			<th>Description</th>
			<th>Question</th>
			<th>Answer</th>
			<th>Points</th>
		</tr>
<?php	
	require('connect.php');
	$q1="SELECT * FROM questionbank";
    $r1=mysqli_query($con, $q1);
	$i=1;
	while($row=mysqli_fetch_array($r1))
	{
				echo '<tr>
									<td>'.$row['qno'].'</td>
									<td>'.$row['qdesc'].'</td>
									<td>'.$row['ques'].'</td>
									<td>'.$row['ans'].'</td>
									<td>'.$row['points'].'</td>	
							</tr>';
				$i++;
	}

?>
	</table>
            </div>
            <div id="footer" class="footer">
                <h5 style="color:white;">&copy; TEAM ECLECTIKA | All Rights Are Reserved.</h5>
            </div>
        </div>
    </div>
</body>
</html>

<?php ob_flush(); ?>