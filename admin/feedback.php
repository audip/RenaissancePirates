<?php
require_once('solvemedialib.php');
require('connect.php');
ob_start();
session_start();
include('head.php');
?>

        <div id="content" class="content">
        
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Message</th>
            <th>Contact</th>
            <th>Email</th>
		</tr>
<?php	
	require('connect.php');
	$str1="SELECT * FROM rpfeedback";
	$res1=mysqli_query($con, $str1);
	while($row=mysqli_fetch_array($res1))
	{
				echo '<tr>
									<td>'.$row['id'].'</td>
									<td>'.$row['name'].'</td>
									<td>'.$row['message'].'</td>
                                    <td>'.$row['contact'].'</td>
                                    <td>'.$row['email'].'</td>
							</tr>';
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