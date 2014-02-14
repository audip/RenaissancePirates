<?php
    session_start();
    ob_start();
    require('connect.php');
    /*if(isset($_SESSION['username']))
    {
	    	$username=$_SESSION['username'];
	    	$q11="SELECT otp FROM stuinfo WHERE username='$username'";
	    	$r11=mysqli_query($con,$q11);
	    	$row=mysqli_fetch_array($r11);
	    	$otp=$row['otp'];
	    	if($otp='')
	    	{
		    	$link='<a href="http://eclectika.org/quiz/verify.php?otp='.$otp.'">VERIFY EMAIL ADDRESS</a>';
			 //Resend verification mail
		    	//die();
	    	}
    }*/
    if(!isset($_SESSION['username']))
    {
        header('location:login.php');
    }
    else
    {
        //Proceed with Game Home
        $username=$_SESSION['username'];
        $q0="INSERT INTO quizuser VALUES('', '$username', '0',
        '0','0','0', '0', 
        '2', '2','2','2',
        	'2','2','2','2',        
        	'2', '2','2','2',
        '2', '2','2','2',
        	'2', '2','2','2',
        	'2', '2','2','2',
        	'2', '2'
        	)";
        //echo $q0;
        //die();
        mysqli_query($con, $q0);
        header('location:home.php');
    }
ob_flush();
?>
<html>
<?php echo $link; ?>
</html>