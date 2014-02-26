<?php
ob_start();
session_start();
require('fb.php');
?>
<html>
	<head>
		<title>Renaissance Pirates | Task 1</title>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<style>
			body{
				font-size: 18px;
				font-family: Montserrat, Helvetica Neue, sans-serif;
				margin: 30px auto 20px auto;
				width: 95%;
				color: white;
				background-color: #1abc9c;
				text-align: center;
			}
			.lightblue{
				color: #2ecc71;
				font-size: 20px;
			}
			.underline{
				text-decoration: underline;
			}
			h1,h2,h3,h4,h5,h6{
				text-align: center;
			}
			h1{
				font-style: italic;
			}
			.foot{
				margin: 20px auto 20px auto;
				text-align:center;
				background-color: rgba(0,0,0,0.3);
				padding: 10px 20px;
				width: 100%;
			}
			table{
				font-size: 18px;
				text-align: center;
				width: 70%;
				margin: 0px auto;
			}
		</style>
		
	</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=302979109716651";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php 
	require('connect.php');
	if($_POST)
	{
		$count=$_POST['count'];
		$username=$_SESSION['name'];
		$uid=$_SESSION['uid'];
		$q31="SELECT u1,u2,u3,u4,u5,u6,u7,u8,u9,u10 FROM quizuser WHERE username='$username'";
		$r31=mysqli_query($con, $q31);
		$row=mysqli_fetch_array($r31);
		//echo 'step one';
		if($count>0)
		{
			//echo 'step two';
			if($row['u1']==$uid)
			{ 
				//echo 'step three';
				$q32="UPDATE quizuser SET u1='' WHERE username='$username'";
				//echo $q32;die();
				mysqli_query($con, $q32);
			}
			if($row['u2']==$uid)
			{ 
				$q32="UPDATE quizuser SET u2='' WHERE username='$username'";
				mysqli_query($con, $q32);
			}
			if($row['u3']==$uid)
			{ 
				$q32="UPDATE quizuser SET u3='' WHERE username='$username'";
				mysqli_query($con, $q32);
			}
			if($row['u4']==$uid)
			{ 
				$q32="UPDATE quizuser SET u4='' WHERE username='$username'";
				mysqli_query($con, $q32);
			}
			if($row['u5']==$uid)
			{ 
				$q32="UPDATE quizuser SET u5='' WHERE username='$username'";
				mysqli_query($con, $q32);
			}
			if($row['u6']==$uid)
			{ 
				$q32="UPDATE quizuser SET u6='' WHERE username='$username'";
				mysqli_query($con, $q32);
			}
			if($row['u7']==$uid)
			{ 
				$q32="UPDATE quizuser SET u7='' WHERE username='$username'";
				mysqli_query($con, $q32);
			}
			if($row['u8']==$uid)
			{ 
				$q32="UPDATE quizuser SET u8='' WHERE username='$username'";
				mysqli_query($con, $q32);
			}
			if($row['u9']==$uid)
			{ 
				$q32="UPDATE quizuser SET u9='' WHERE username='$username'";
				mysqli_query($con, $q32);
			}
			if($row['u10']==$uid)
			{ 
				$q32="UPDATE quizuser SET u10='' WHERE username='$username'";
				mysqli_query($con, $q32);
			}
			header('location:signup.php');
		}

	}
	if($_GET)
	{
		
		$username=mysqli_real_escape_string($con, $_GET['username']);
		$uid=mysqli_real_escape_string($con, $_GET['uid']);
		$_SESSION['uid']=$uid;
		$_SESSION['name']=$username;
		$q31="SELECT u1,u2,u3,u4,u5,u6,u7,u8,u9,u10 FROM quizuser WHERE username='$username'";
		$r31=mysqli_query($con, $q31);
		$row=mysqli_fetch_array($r31);
		$u1=$row['u1'];
		$u2=$row['u2'];
		$u3=$row['u3'];
		$u4=$row['u4'];
		$u5=$row['u5'];
		$u6=$row['u6'];
		$u7=$row['u7'];
		$u8=$row['u8'];
		$u9=$row['u9'];
		$u10=$row['u10'];
		//echo $n1.'<br/>'.$n2.'<br/>'.$n3.'<br/>'.$n4.'<br/>'.$n5.'<br/>';
		//echo $link1.'<br/>'.$link2.'<br/>'.$link3.'<br/>'.$link4.'<br/>'.$link5.'<br/>';
		//$feed="UPDATE quizuser SET u1='$u1',u2='$u2',u3='$u3',u4='$u4',u5='$u5' WHERE username='$username'";
		//mysqli_query($con, $feed);
	}
?>
<h1><u>Facebook Page for Renaissance Pirates</u></h1>
<br/><br/>
	<div id="fb-root"></div> <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-post" data-href="http://www.facebook.com/photo.php?fbid=596076197149289&amp;set=a.595143727242536.1073741827.595017373921838&amp;type=1" data-width="800"><div class="fb-xfbml-parse-ignore"><a href="http://www.facebook.com/photo.php?fbid=596076197149289&amp;set=a.595143727242536.1073741827.595017373921838&amp;type=1">Post</a> by <a href="http://www.facebook.com/renaissancepirates">Renaissance Pirates</a>.</div></div>

	<div id="fbwrap" >
	<div class="fb-like-box" data-href="http://www.facebook.com/renaissancepirates" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"
	data-like="1"></div></div>
	<p class="bold foot">Created by Aditya Purandare, Krishna Srivastava &amp; Mansi Jain</p>
	<script src="src/jquery.js"></script>
	<script>
			$('.fb-like-box').hover(function(e){
				var count=$(this).data('like');
				console.log(count);
				var delay=3000//5 seconds
    			setTimeout(function(){
    			$.ajax({
                    type: 'POST',
                    url: 'fbtask1.php',
                    data: 'count='+count,
                    success: function(data){
                        if(data != null) $("body").html(data)
                        }
                        });
    				//your code to be executed after 1 seconds
  				  },delay)
			});	
			$('h1').click(function(){
				$(this).text('ABC');
			});

	</script>
</body>
</html>