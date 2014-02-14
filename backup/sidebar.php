<?php ob_start(); ?>
<a href="home.php"><img src="home.png"  height="75" width="75" alt="Eclectika Home"/></a><br/>
<?php
	
	require('connect.php');
	$username=$_SESSION['username'];
	if(!isset($_SESSION['username']))
    {
        header('location:login.php');
    }
    else
    {
        //Proceed with Game Home
    }

	//echo $username;
	$q2="SELECT pic, name FROM stuinfo WHERE username='$username'";
	$r2=mysqli_query($con,$q2);
	$row=mysqli_fetch_array($r2);
	echo '<img width="100" height="100" src="'.$row[0].'"/><br/>';
?>
<a href="profile.php"><?php  echo $row[1]; ?>'s Profile</a><br/>
<button type="button" id="logout"><a href="logout.php">LOGOUT</a></button>

<?php ob_flush(); ?>