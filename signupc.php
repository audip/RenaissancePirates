<?php
ob_start();
require_once("solvemedialib.php");
require('connect.php');
require_once('fb.php');
if($_POST)
{
    /*$privkey="arSuUTJHqxu1uarsXvuO6UyluliVw9Dq";
    $hashkey="6CKg17T7.VmCnXxRZ3ARYmCEBP0Oit6-";
    $solvemedia_response = solvemedia_check_answer($privkey,
        $_SERVER["REMOTE_ADDR"],
        $_POST["adcopy_challenge"],
        $_POST["adcopy_response"],
        $hashkey);
    if (!$solvemedia_response->is_valid) {
        //handle incorrect answer
        print "Error: ".$solvemedia_response->error;
    }
    else {*/
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
        

            if(!empty($name)&&!empty($email)&&!empty($username)&&!empty($password)
                &&!empty($cpassword)&&!empty($gender)&&!empty($college)&&!empty($branch)
                &&!empty($year)&&!empty($mobile))
            {
                if($password===$cpassword)
				{
					$otp=$fbid;
					$pic=$imageURL;
					$q4="INSERT INTO stuinfo VALUES('','$name','$username','$password','$college','$mobile','$email','$gender','$branch','$year','$pic','$otp')";
					//echo $q4;die();
					mysqli_query($con, $q4);
					$link='<a href="http://eclectika.org/verify.php?otp='.$otp.'">Verify Email</a>';
					echo '<br/>Registration Complete!!';
					//echo $link;
					//mail();
					header('location:index.php');
				}
            }

        }


    }
}

//include the Solve Media library
?>



<html>
<head>
    <title>Renaissance Pirates!</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<style type="text/css">
            p{display:block;}
    </style>
</head>

<body>
    <hr>

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

		<center>
		<h1> SIGN UP! </h1>
		<br /> <br />
                <div id="signup">
                  <small><em>Note : All fields with * are compulsory</em></small>
				  	<p >
			<fb:login-button perms="email, publish_stream" size="large">Connect with Facebook</fb:login-button><br/><br/>
			<small>Faster Signup using Facebook</small></p>
                        <form action="signup.php" method="post" name="signup">
                            <table cellpadding="5" cellspacing="5">
                                <tr>
                                    <td><label for="name">*Name :</label></td>

                                    <td><input type="text" name="name" id="name" required="" 
                        		value="<?php if($facebook->getUser()){echo $fbname;} ?>"
                        		/></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="email">*Email :</label></td>

                                    <td><input type="email" name="email" id="email" value="<?php if($facebook->getUser()){echo $fbemail;} ?>" /></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="mobile">*Mobile :</label></td>

                                    <td><input type="mobile" name="mobile" id="mobile" required="required" maxlength="10"></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="username">*Username :</label></td>

                                    <td><input type="text" name="username" id="username" value="<?php if($facebook->getUser()){echo $fbusername;} ?>"/></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="password">*Password :</label></td>

                                    <td><input type="password" name="password" id="password" required="required"></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="cpassword">*Confirm Password :</label></td>

                                    <td><input type="password" name="cpassword" id="cpassword" required="required"></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="male">*Gender :</label></td>

                                    <td><input type="radio" name="gender" id="male" value="Male" <?php if($facebook->getUser()){if($fbgender=="Male")echo 'checked="checked"';}?>/><label for="male">Male</label> <input type="radio" name="gender" id="female" value="Female" <?php if($facebook->getUser()){if($fbgender=="Female")echo 'checked="checked"';}?>/><label for="female">Female</label></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="college">*College :</label></td>

                                    <td><input type="text" name="college" id="college" list="collegelist" size="50" required="required"> <datalist id="collegelist"></datalist></td>

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
								 <script type="text/javascript">
										var ACPuzzleOptions = {
														tabindex:   11,
														lang:     'en'
										};
								</script>

                                <tr>
                                    <td colspan="2"><?php //echo solvemedia_get_html("qjmGRXOO9Bq7AfRhBy22ue7pPkcBCGIH"); //outputs the widget
                                    ?></td>
                                </tr>

                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>

                                <tr>
                                    <td colspan="2" align="center"><input type="submit" value="SIGNUP"></td>
                                </tr>
                            </table>
                        </form>
                </div>

                <div>
                    <?php ob_flush(); ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
