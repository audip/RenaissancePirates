<?php
ob_start();
require_once("solvemedialib.php");
require('connect.php');
if($_POST)
{
    $privkey="arSuUTJHqxu1uarsXvuO6UyluliVw9Dq";
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
            //FILE UPLOADING CODE STARTS HERE
            $pic='';
            $flag=0;
            //echo $name.$email.$username.$password.$cpassword.$gender.$college.$branch.$year;
            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = strtolower(end($temp));
            /*echo 'Image received';
                if ((($_FILES["file"]["type"] == "image/gif")
                        || ($_FILES["file"]["type"] == "image/jpeg")
                        || ($_FILES["file"]["type"] == "image/jpg")
                        || ($_FILES["file"]["type"] == "image/pjpeg")
                        || ($_FILES["file"]["type"] == "image/x-png")
                        || ($_FILES["file"]["type"] == "image/png"))
                    && ($_FILES["file"]["size"] < 2000000)
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
                            $_SESSION['image']=$img;
                            //echo 'hi i m almost here';
                            //$pic=$img;
                            //$flag++;
                        }
                    }
                }*/


            if(!empty($name)&&!empty($email)&&!empty($username)&&!empty($password)
                &&!empty($cpassword)&&!empty($gender)&&!empty($college)&&!empty($branch)
                &&!empty($year)&&!empty($mobile))
            {
                if($password===$cpassword)
                {
                    $otp=uniqid();
                    //$password=md5($password);
                    $q4="INSERT INTO stuinfo VALUES('','$name','$username','$password','$college','$mobile','$email',','$dob',$gender','$branch','$year','','$otp')";
                    mysqli_query($con, $q4);
                    /*if($_SESSION['image'])
                    {
                        $img=$_SESSION['image'];
                    }*/
                    /*$q40="SELECT id FROM stuinfo WHERE username='$username'";
                    $r40=mysqli_query($con, $q40);
                    $row=mysqli_fetch_array($r40);
                    $id=$row['id'];
                    $s5 = ".";
                    $img = 'images/'.$username.$s5.$extension;
                    if($id)
                    {
                        move_uploaded_file($_FILES["file"]["tmp_name"], $img);
                    }*/
                    $link='<a href="http://eclectika.org/quiz/verify.php?otp='.$otp.'" style="color:white;">VERIFY EMAIL ADDRESS</a>';
                    echo 'Data Captured Successfully! Redirecting...';
                    //echo $link;
                    //Mail Code Starts Here - Written by Aditya Purandare
                    $to ="$email";
                    $name = "$name";
                    $from    = "admin@eclectika.org";
                    //begin of HTML message
                    $message = '<html>
                <head>
                    <link href="http://fonts.googleapis.com/css?family=Merienda" rel="stylesheet" type="text/css">
                    <style>
                        a{
                            color: white;
                        }
                    </style>
                </head>
                    <body style="background:url(http://www.eclectika.org/test3/css/images/bg.jpg);background-size:cover;font-family:Merienda;">
                    <font color="White">
                    Dear <strong><em>'.$name.'</em></strong>, <br/>
                    <img src="http://eclectika.org/test3/css/images/eclectikacover.jpg" style="width: 70%;"/>
                    <p>Welcome to Central India&#39;s Largest Cultural &amp; Technical Festival, ECLECTIKA 2014, is starting on 21st, 22nd &amp; 23rd February &#39;14</p>
                    <p>
                    Thank You for Registering to Eclectika &#39;s Official Website, we will soon start Updating you on Eclectika&#39;s Progress.
                    </p>
                    <p>
                    Complete the signup process for <a href="http://eclectika.org">Eclectika.org</a>, by clicking '.$link.';
                    Or Enter the following when prompted :<span style="color:red">'.$otp.'</style>
                    </p>
                    <p>
                    Follow us on our Social channels: <a><img src="http://eclectika.org/images/facebook.png" width="30" height="30"/></a>&nbsp; <a><img src="http://eclectika.org/images/twitter.png" width="30" height="30"/></a>
                    </p>
                    <br/>
                    Regards,<br/>
                    <strong>Admin</strong><br/>Webteam Eclectika<br/>
                    Contact Us :<br/>09479143087 (Saket Poddar, 4th Year)
                    <br/>09301522144 (Aditya Purandare, 3rd Year)
                    </font>
                    </html>';
                    $subject="Team Eclectika&#39;s Welcome Mail";
                    //end of message
                    $headers = 'From: '.$from."\r\n".
                        "Reply-To: aditya@eclectika.org \r\n".
                        "Content-Type: text/html; charset=iso-8859-1\n".
                        'X-Mailer: PHP/'.phpversion();
                    //echo $to.'<br/>'.$from.'<br/>'.$message.'<br/>'.$subject;
                    //die();
                    mail($to, $subject, $message, $headers);
                    //Mail Code Ends Here
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
                    <fieldset>
                        <legend>Signup</legend> <small><em>Note : All fields with * are compulsory</em></small>

                        <form action="signup.php" method="post" name="signup">
                            <table cellpadding="5" cellspacing="5">
                                <tr>
                                    <td><label for="name">*Name :</label></td>

                                    <td><input type="text" name="name" id="name" required="required" autofocus="autofocus" tabindex="1"></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="email">*Email :</label></td>

                                    <td><input type="email" name="email" id="email" required="required" tabindex="2"></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="mobile">*Mobile :</label></td>

                                    <td><input type="mobile" name="mobile" id="mobile" required="required" maxlength="10" tabindex="3"></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="username">*Username :</label></td>

                                    <td><input type="text" name="username" id="username" required="required" tabindex="4"></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="password">*Password :</label></td>

                                    <td><input type="password" name="password" id="password" required="required" tabindex="5"></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="cpassword">*Confirm Password :</label></td>

                                    <td><input type="password" name="cpassword" id="cpassword" required="required" tabindex="6"></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="male">*Gender :</label></td>

                                    <td><input type="radio" name="gender" id="male" value="Male" required="required" tabindex="7"><label for="male">Male</label> <input type="radio" name="gender" id="female" value="Female" tabindex="8"><label for="female">Female</label></td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="college">*College :</label></td>

                                    <td><input type="text" name="college" id="college" list="collegelist" size="50" required="required" tabindex="8"> 
                                  	  	<datalist 	id="collegelist">
                                  	  				<option value="National Institute of Technology, Raipur"></option>
								  	  	</datalist>
                                    </td>

                                    <td></td>
                                </tr>

                                <tr>
                                    <td><label for="branch">*Branch :</label></td>

                                    <td><select id="branch" name="branch" required="required" tabindex="9">
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

                                    <td><select id="year" name="year" required="required" tabindex="10">
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
                                </tr><!-- <tr>
                                    <td>
                                        <label for="file">Profile Picture :</label>
                                    </td>
                                    <td>
                                        <input type="file" name="file" id="file" />
                                    </td>
                                </tr>
                                 -->
								 

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
                                    <td colspan="2" align="center"><input type="submit" value="SIGNUP"></td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </div>

                <div>
                    <?php ob_flush(); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
