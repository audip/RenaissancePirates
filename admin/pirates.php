<?php
require_once('solvemedialib.php');
require('connect.php');
ob_start();
session_start();
include('head.php');
?>

        <div id="content" class="content">
        <?php
        	$q1="SELECT count(id) AS total FROM quizuser";
        	$q2="SELECT count(id) AS total FROM stuinfo";
        	$r1=mysqli_query($con, $q1);
        	$r2=mysqli_query($con, $q2);
        	$row1=mysqli_fetch_array($r1);
        	$row2=mysqli_fetch_array($r2);
        	echo '<em><strong>Total Registered Pirates : '.$row1['total'];
        	echo '<br><em><strong>Total Eclectika Users : '.$row2['total'];
        ?>
	<table>
		<tr>
			
			<th>Rank</th>
			<th>Username</th>
			<th>Name</th>
			<th>College</th>
			<th>Score</th>
			<th>Id</th>
			<th>Email</th>
		</tr>
<?php	
	require('connect.php');
	$str1="SELECT * FROM quizuser, stuinfo WHERE quizuser.username=stuinfo.username ORDER BY score DESC, time ASC";
	$res1=mysqli_query($con, $str1);
	$i=1;
	while($row=mysqli_fetch_array($res1))
	{
				echo '<tr>
									<td>'.$i.'</td>
									<td>'.$row['username'].'</td>
									<td style="text-transform:capitalize">'.$row['name'].'</td>
									<td>'.$row['college'].'</td>
									<td>'.$row['score'].'</td>
									<td>'.$row['id'].'</td>	
									<td>'.$row['email'].'</td>				
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