<?php
ob_start();
require('connect.php');
if(isset($_GET['otp'])&&!empty($_GET['otp']))
{
	$otp=$_GET['otp'];
	if($otp!='')
	{
		$q6="SELECT username, otp FROM stuinfo where otp='$otp'";
		$r6=mysqli_query($con, $q6);
		if(mysqli_num_rows($r6)==1)
		{	
			$row=mysqli_fetch_array($r6);
			$username=$row['username'];
			if($row['otp']==$otp)
			{
				$q7="UPDATE stuinfo SET otp='' WHERE username='$username'";
				mysqli_query($con,$q7);
				echo 'Email Verified Successfully! Please head to <a href="index.php">login page</a>';
				header('refresh:3;index.php');
			}
		}
		else{
			echo 'Email Verified Already. Please head to <a href="index.php">login page</a>';
		}
	}	
}
else{?>

<?php } 
ob_flush();
?>

