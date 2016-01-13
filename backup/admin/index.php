<?php
require_once('solvemedialib.php');
require('connect.php');
//include the Solve Media library
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Renaissance Pirates | Admin Panel </title>
    <style type="text/css">
/*<![CDATA[*/
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
    margin-top: 40px;
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
        background-color: #e74c3c;
        border: 0px;
        padding: 10px 20px;
        color: white;
        font-size: 20px;
        font-family: Merienda, Helvetica Neue, sans-serif;
    }
    input[type=submit]:hover{
        cursor: pointer;
        background-color: #3498db;
        font-family: Merienda, Helvetica Neue, sans-serif;
        -webkit-transition: background-color 0.4s ease-out;
    }
    /*]]>*/
    </style>
</head>

<body style="background-image:url(bg.jpg);background-size:cover;height:100%;width:100%; background-attachment:fixed; font-family:Merienda;">
    <div id="wrapper">
        <div id="header" class="header">
            <ul>
                <li><a href="#" style="text-decoration:none; color:white">Home</a></li>

                <li><a href="#" style="text-decoration:none; color:white;">Online Events</a></li>

                <li><a href="#" style="text-decoration:none; color:white;">Accomodation</a></li>

                <li><a href="#" style="text-decoration:none; color:white;">Events</a></li>

                <li><a href="#" style="text-decoration:none; color:white;">Contact Us</a></li>
            </ul>
        </div>

        <div id="content" class="content">
            <?php
if($_POST)
{
	require_once("solvemedialib.php");
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
		if(isset($_POST['username'])&&isset($_POST['password']))
		{
			$username=mysqli_real_escape_string($con, $_POST['username']);
			$password=mysqli_real_escape_string($con, $_POST['password']);
			$password=md5($password);

			if(!empty($username)&&!empty($password))
			{
				//$password=md5($password);
				$str="SELECT username, password FROM rpadmin WHERE username='$username'";
				$result = mysqli_query($con, $str);
				if(mysqli_num_rows($result)==1)
				{
					/*if (!$result) {
  					printf("Error: %s\n", mysqli_error($con));
    					exit();
				}*/
					$row=mysqli_fetch_array($result);
					if($username===$row['username'] && $password===$row['password'])
					{
						$_SESSION['username']=$row['username'];
						echo 'Logged In';
						header('location:adminhome.php');
					}
				}
			}
		}
	}
}?>

            <form action="index.php" method="post" name="signup">
                <table cellpadding="5" cellspacing="5" align="center" style="color:#CCC;">
                    
                    <tr>
                        <td><label for="username">*Username :</label></td>

                        <td><input type="text" name="username" id="username" pe="text" required="required" tabindex="1" accesskey="u"/></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td><label for="password">*Password :</label></td>

                        <td><input type="password" name="password" id="password" required="required" tabindex="2" accesskey="up"/></td>

                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <script type="text/javascript">
	var ACPuzzleOptions = {
                tabindex:   3,
				lang:	    'en'
	};
  </script><?php echo solvemedia_get_html("qjmGRXOO9Bq7AfRhBy22ue7pPkcBCGIH"); //outputs the widget
?></td>
                    </tr>

                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="LOGIN" tabindex="4"/></td>
                    </tr>
                </table>
            </form>

            <div id="footer" class="footer">
                <h5 style="color:white;">@TEAM ECLECTIKA | All Rights Are Reserved.</h5>
            </div>
        </div>
    </div>
</body>
</html>
