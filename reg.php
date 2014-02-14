<?php
ob_start();
require_once('solvemedialib.php');
//require('connect.php');
require('serverinfo.php');
require_once('fb.php');
//include the Solve Media library
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Eclectika Signup</title>
    <style type="text/css">
    .font,p,footer,header,li,h1,h2,h3,h4,h5,h6{
    font-family:Merienda;
    }
    body{
        font-family: Merienda, Helvetica Neue, sans-serif;
        color: white;
    }
    .wrapper{
    width:100%;
    }
    li{
    display:inline;
    margin-left:3%;
    }
    .header{
    width:99%;
    color:white;
    padding:0.1% 0%;
    margin-top:2%;
    font-size:18px;
    background-size:cover;
    text-align:center;
    background: rgba(0, 0, 0, 0.5);
    }
    .contact{
    width:99%;
    float:left;

    }
    .right{
    width:12%;
    float:right;
    margin-right:2%;
    margin-top:1%;
    font-size:18px;
    text-align:left;
    background-color:blue;
    }

    .footer{
    width:99%;
    clear:both;
    font-size:18px;
    background-size:cover;
    text-align:center;
    background: rgba(0, 0, 0, 0.5);

    }
    .content{
    width:99%;
    font-size:18px;
    color:white;
    text-align:center;
    }
    .table{
    text-align:left;
    color:#999;
    }
    td{
    color:white;
    }
    input[type=submit]{
        background-color: red;
        border: 0px;
        padding: 10px 20px;
        color: white;
        font-size: 20px;
        font-family: Merienda, Helvetica Neue, sans-serif;
    }
    input[type=submit]:hover{
        cursor: pointer;
        background-color: #cf1111;
        font-family: Merienda, Helvetica Neue, sans-serif;
    }
    </style>
</head>

<body style="background-image:url(http://eclectika.org/test3/css/images/bg.jpg);background-size:cover;height:100%;width:100%; background-attachment:fixed; font-family:Merienda;">
    <div id="wrapper">
        <div id="header" class="header">
            <ul>
                <li><a href="http://eclectika.org/index1.php" style="text-decoration:none; color:white">Home</a></li>

                <li><a href="http://eclectika.org/index1.php" style="text-decoration:none; color:white;">Online Events</a></li>

                <li><a href="http://eclectika.org/index1.php" style="text-decoration:none; color:white;">Accomodation</a></li>

                <li><a href="http://eclectika.org/index1.php" style="text-decoration:none; color:white;">Events</a></li>

                <li><a href="http://eclectika.org/index1.php" style="text-decoration:none; color:white;">Contact Us</a></li>
            </ul>
        </div>

        <div id="content" class="content">
            <h2 style="text-decoration: underline">Signup for Eclectika</h2><small><em><font color="#E1E1E1">Note : All fields with * are compulsory</font></em></small> <?php
if($_POST)
{
	require('serverinfo.php');
	$privkey="arSuUTJHqxu1uarsXvuO6UyluliVw9Dq";
	$hashkey="6CKg17T7.VmCnXxRZ3ARYmCEBP0Oit6-";
	$solvemedia_response = solvemedia_check_answer($privkey,
		$_SERVER["REMOTE_ADDR"],
		$_POST["adcopy_challenge"],
		$_POST["adcopy_response"],
		$hashkey);
	if (!$solvemedia_response->is_valid) {
		//handle incorrect answer
		print "<br/>Error: ".$solvemedia_response->error;
	}
	else {
		//process form here
		if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['username'])&&isset($_POST['password'])
			&&isset($_POST['cpassword'])&&isset($_POST['gender'])&&isset($_POST['college'])&&isset($_POST['branch'])
			&&isset($_POST['year'])&&isset($_POST['mobile']))
		{
			$name=mysqli_real_escape_string($con, $_POST['name']);
			$email=mysqli_real_escape_string($con, $_POST['email']);
			$username=mysqli_real_escape_string($con, $_POST['username']);
			$password=mysqli_real_escape_string($con, $_POST['password']);
			$cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);
			$mobile=mysqli_real_escape_string($con, $_POST['mobile']);
			$gender=mysqli_real_escape_string($con, $_POST['gender']);
			$college=mysqli_real_escape_string($con, $_POST['college']);
			$branch=mysqli_real_escape_string($con, $_POST['branch']);
			$year=mysqli_real_escape_string($con, $_POST['year']);
			//echo $name.'<br/>'.$email.'<br/>'.$username.'<br/>'.$password.'<br/>'.$cpassword.'<br/>'.$mobile.'<br/>'.$gender.'<br/>'.$college.'<br/>'.$branch.'<br/>'.$year.'<br/>';
			//die();
		    //echo $name.$email.$username.$password.$cpassword.$gender.$college.$branch.$year;
			if(!empty($name)&&!empty($email)&&!empty($username)&&!empty($password)
				&&!empty($cpassword)&&!empty($gender)&&!empty($college)&&!empty($branch)
				&&!empty($year)&&!empty($mobile))
			{
				if($password===$cpassword)
				{
					$otp=$fbid;
					$pic=$imageURL;
					$q4="INSERT INTO stuinfo VALUES('','$name','$username','$password','$college','$mobile','$email','$gender','$branch','$year','$pic','$otp','1')";
					//echo $q4;die();
					mysqli_query($con, $q4);
					$link='<a href="http://eclectika.org/verify.php?otp='.$otp.'">Verify Email</a>';
					echo '<br/>Registration Complete!!';
					//echo $link;
					//mail();
					header('location:http://eclectika.org/index1.php');
				}
			}

		}
	}
}

?>		
			<p >
			<fb:login-button perms="email, publish_stream" size="large">Connect with Facebook</fb:login-button><br/><br/>
			<small style="color:#e1e1e1;">Faster Signup using Facebook</small></p>
            <form action="reg.php" method="post" name="signup">
                <table cellpadding="5" cellspacing="5" align="center" style="color:#CCC;">
                    <tr>
                        <td><label for="name">*Name :</label></td>

                        <td>
                        		<input type="text" name="name" id="name" required="" 
                        		value="<?php if($facebook->getUser()){echo $fbname;} ?>"
                        		/>
                        	</td>

                        <td></td>
                    </tr>

                    <tr>
                        <td><label for="email">*Email :</label></td>

                        <td><input type="email" name="email" id="email" value="<?php if($facebook->getUser()){echo $fbemail;} ?>" /></td>

                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="username">*Username :</label></td>

                        <td><input type="text" name="username" id="username" value="<?php if($facebook->getUser()){echo $fbusername;} ?>"/></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td><label for="password">*Password :</label></td>

                        <td><input type="password" name="password" id="password" /></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td><label for="cpassword">*Confirm Password :</label></td>

                        <td><input type="password" name="cpassword" id="cpassword" /></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td><label for="male">*Gender :</label></td>

                        <td><input type="radio" name="gender" id="male" value="Male" <?php if($facebook->getUser()){if($fbgender=="Male")echo 'checked="checked"';}?>/><label for="male">Male</label> <input type="radio" name="gender" id="female" value="Female" <?php if($facebook->getUser()){if($fbgender=="Female")echo 'checked="checked"';}?>/><label for="female">Female</label></td>

                        <td></td>
                    </tr>
					<tr>
                        <td><label for="mobile">*Mobile :</label></td>

                        <td><input type="mobile" name="mobile" id="mobile" required="" maxlength="10" /></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td><label for="college">*College :</label></td>

                        <td><input type="text" name="college" id="college" list="collegelist" size="50" /><datalist id="collegelist"></datalist></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td><label for="branch">*Branch :</label></td>

                        <td><select id="branch" name="branch" required="required">
                            <option value="Architecture">
                                Architecture
                            </option>

                            <option value="Biomedical Engineering">
                                Biomedical Engineering
                            </option>

                            <option value="Biotechnology">
                                Biotechnology
                            </option>

                            <option value="Chemical Engineering">
                                Chemical Engineering
                            </option>

                            <option value="Civil Engineering">
                                Civil Engineering
                            </option>

                            <option value="Computer Science &amp; Engineering">
                                Computer Science &amp; Engineering
                            </option>

                            <option value="Electrical Engineering">
                                Electrical Engineering
                            </option>

                            <option value="Electronic &amp; Telecom. Engineering">
                                Electronic &amp; Telecom. Engineering
                            </option>

                            <option value="Information Technology">
                                Information Technology
                            </option>

                            <option value="MCA">
                                MCA
                            </option>

                            <option value="Mechanical Engineering">
                                Mechanical Engineering
                            </option>

                            <option value="Mining Engineering">
                                Mining Engineering
                            </option>

                            <option value="Metallurgical Engineering">
                                Metallurgical Engineering
                            </option>
                        </select></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td><label for="year">*Year :</label></td>

                        <td><select id="year" name="year" required="required">
                            <option value="First">
                                First
                            </option>

                            <option value="Second">
                                Second
                            </option>

                            <option value="Third">
                                Third
                            </option>

                            <option value="Fourth">
                                Fourth
                            </option>

                            <option value="Fifth">
                                Fifth
                            </option>
                        </select></td>

                        <td></td>
                    </tr>
                    <?php
					if($facebook->getUser()){
					echo '
                    <tr>
                        <td><label for="file">Facebook Profile Picture :</label></td>

                        <td><img style="border-radius: 155px;" src="'.$imageURL.'" width="160" height="150"/></td>
                    </tr>';
                    }
                    ?>

                    <tr>
                        <td colspan="2">
                        <script type="text/javascript">
										var ACPuzzleOptions = {
														tabindex:   11,
														lang:     'en'
										};
								</script>
                        <?php echo solvemedia_get_html("qjmGRXOO9Bq7AfRhBy22ue7pPkcBCGIH"); //outputs the widget
?></td>
                    </tr>

                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Register" /></td>
                    </tr>
                </table>
            </form>

            <div id="footer" class="footer">
                <h5 style="color:white;">&copy;TEAM ECLECTIKA | All Rights Are Reserved.</h5>
            </div>
        </div>
    </div>
    
	<div id='fb-root'></div>
	<script src='http://connect.facebook.net/en_US/all.js'></script>
	<script>
				FB.init({
    appId      : '302979109716651',
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
		});
		FB.Event.subscribe('auth.login', function(response) {

        window.location.reload();

      });

      </script> 
</body>
</html>
<?php ob_flush(); ?>