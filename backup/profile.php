<?php
	ob_start();
	require ("connect.php");
	session_start();
	$username=$_SESSION['username'];
	if(!isset($_SESSION['username']))
    {
        header('location:login.php');
    }
    else
    {
        //Proceed with Game Home
    }

	
	if(isset($_POST['oldpass']) && isset($_POST['newpass']) && isset($_POST['conpass'])&&!empty($_POST['oldpass']) && !empty($_POST['newpass']) && !empty($_POST['conpass']))
	{
		$old = $_POST['oldpass'];
		$new = $_POST['newpass'];
		$conf = $_POST['conpass'];
		
		$str="SELECT password FROM stuinfo WHERE username='$username'";
		//echo $str;
		//die();
		$res = mysqli_query($con, $str);
		$row = mysqli_fetch_array($res);
			if($row['password'] == $old)
			{
				if($new == $conf)
				{
					$password=md5($password);
					$s2 = "UPDATE stuinfo SET password='$new' WHERE username='$username'";
					$r2 = mysqli_query($con,$s2);
					echo "Password changed successfully";
					header("location:profile.php");
				}
				else
					echo "Passwords do not match";
			}
			else
				echo "Incorrect Old Password";
		
	}
	if(isset($_FILES["file"]["name"]))
	{
			//FILE UPLOADING CODE STARTS HERE
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = strtolower(end($temp));
			if ((($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/x-png")
			|| ($_FILES["file"]["type"] == "image/png"))
			&& ($_FILES["file"]["size"] < 200000)
			&& in_array($extension, $allowedExts))
			{
				if ($_FILES["file"]["error"] > 0)
				{
					echo "Return Code: ".$_FILES["file"]["error"]."<br>";
				}
				else
				{
					//echo "Upload: ".$_FILES["file"]["name"]."<br>";
					//echo "Type: ".$_FILES["file"]["type"]."<br>";
					//echo "Size: ".($_FILES["file"]["size"] / 1024)." kB<br>";
					//echo "Temp file: ".$_FILES["file"]["tmp_name"]."<br>";
		
					if (file_exists("images/".$_FILES["file"]["name"]))
					{
						echo $_FILES["file"]["name"]." already exists. ";
					}
					else
					{			
						$s5 = ".";
						$img = 'images/'.$username.$s5.$extension;
						if(file_exists("images/$img")) 
							unlink("images/$img");
						move_uploaded_file($_FILES["file"]["tmp_name"], $img);
						//echo "Stored in: "."images/".$_FILES["file"]["name"];
						
						
						$s1 = "UPDATE stuinfo SET pic='$img' WHERE username='$username'";
						mysqli_query($con, $s1);
						header("location:profile.php");
					}
				}
			}
	}
?>

<html>
<head>
	<title>Renaissance Pirates | <?php 
	require_once('connect.php');
	$q14="SELECT name FROM stuinfo WHERE username='$username'";
	$r14=mysqli_query($con,$q14);
	$row=mysqli_fetch_array($r14);
	$name=$row['name'];
	echo $name;?>&#39;s
	Profile</title>
	<style type="text/css">
		#hr{
			color : #e0e0e0;
			width : 70%;
		}
		img{
			//float : left;
			margin-top : 5px;
			margin-right : 20px;
			height : 100px
			width : 100px;
		}

		h1{
			//float : center;
		}
		#header{
			width : 100%;
		}
		
	</style>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<center>
	<div class="wrapper">
		<div id="header" style="float:left">
            <ul id="navbar">
				<li id="home"><a href="home.php">Home</a></li>
				<li id="profile"><a href="profile.php">My Profile</a></li>
				<li id="play"><a href="home.php">Renaissance Pirates</a></li>
				<li id="rules"><a href="rules.php">Rules</a></li>
				<li id="contacts"><a href="contact.php">Contacts</a></li>
			</ul>
			<div id="userdetails">
				<table width="80%">
					<tr>
						<td width="20%"><span class="bold">&nbsp;</span></td>
						<td width="10%"><span class="bold">&nbsp;</span></td>
						<td width="10%"><span class="bold">&nbsp;</span></td>
				</table>
			</div>
        </div>
		<?php
			require ("connect.php");
						
			$str="SELECT * FROM stuinfo WHERE username='$username'";
			$result = mysqli_query($con,$str);

			$row = mysqli_fetch_array($result);

			
					echo '<div id="header1">
							<img src="'.$row['pic'].'" alt="eclectika pirate default" height="100px" width="100px" style="padding-left:20px" />';
					echo	'<h1>Welcome, '.$row['name'].'</h1>
							</div>
							<hr id="hr" />
							<table id="data">
								<tr>
									<th align="left">Name : </th>
									<td>'.$row['name'].'</td>
								</tr>
								<tr>
									<th align="left">College Name : </th>
									<td>'.$row['college'].'</td>
								</tr>
								<tr>
									<th align="left">Contact : </th>
									<td>'.$row['mobile'].'</td>
								</tr>
								<tr>
									<th align="left">Email ID : </th>
									<td>'.$row['email'].'</td>
								</tr>
								<tr>
									<th align="left">Gender : </th>
									<td>'.$row['gender'].'</td>
								</tr>
								<tr>
									<th align="left">Branch : </th>
									<td>'.$row['branch'].'</td>
								</tr>
								<tr>
									<th align="left">Year : </th>
									<td>'.$row['year'].'</td>
								</tr>
							</table>';
							
			?>
				<form action="profile.php" method="post" enctype="multipart/form-data">
				<fieldset style="width:300px">
					<legend>Change Password</legend>
					<table>
						<tr>
							<td><label for="oldpass">Old Password</label></td>
							<td><input type="password" name="oldpass" id="oldpass" placeholder="Enter your old password.."/></td>
						</tr>
						<tr>
							<td><label for="newpass">New Password</label></td>
							<td><input type="password" name="newpass" id="newpass" placeholder="Enter new password.." /></td>
						</tr>
						<tr>
							<td><label for="conpass">Confirm Password</label></td>
							<td><input type="password" name="conpass" id="conpass" placeholder="Confirm password.." /></td>
						</tr>
						<tr>
							<td colspan="2">
								<label for="file"><font size="2px">Change Profile Pic:</font></label>
								<input type="file" name="file" id="file"><br>
							</td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" value="Save Changes" name="submit"></td>
						</tr>
					</table>
				</fieldset>
				</form> <footer>
	        	<?php include('footer.php'); ?>
        </footer>
    </div><?php ob_flush(); ?>
</center>
</body>
</html>
<?php ob_flush(); ?>