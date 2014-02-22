<?php
ob_start();
session_start();
if($_POST)
{
	echo 'step one';
	require('connect.php');
	$username=$_SESSION['username'];
	$q33="SELECT u1,u2,u3,u4,u5,u6,u7,u8,u9,u10,t1,username FROM quizuser WHERE username='$username'";
	//echo $q33;die();
	$r33=mysqli_query($con, $q33);
	$row1=mysqli_fetch_assoc($r33);
	//print_r($row1);
	if(!empty($row1['u1'])||!empty($row1['u2'])||!empty($row1['u3'])||!empty($row1['u4'])||!empty($row1['u5'])||!empty($row1['u6'])||!empty($row1['u7'])||!empty($row1['u8'])||!empty($row1['u9'])||!empty($row1['u10'])||($row1['t1']=='0'))
	{
		header('location:tas1.php');
	}
	else
	{
		echo 'step two';
		$date = strtotime(date('Y-m-d H:s'));
		$q35="SELECT score, q100 FROM quizuser WHERE username='$username'";
		$r35=mysqli_query($con, $q35);
		$row2=mysqli_fetch_array($r35);
		$score = $row2['score']+100;
		//echo $row['score'];die();
		if($row2['q100']=='0')
		{
			$q34="UPDATE quizuser SET q100='1',time='$date', score='$score' WHERE username='$username'";
			//echo $q34;die();
			mysqli_query($con, $q34);
			header('location:home.php');
		}
		
	}
}
?>
<html>
	<head>
		<title>Renaissance Pirates | Task 1</title>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<style>
			body{
				font-size: 18px;
				font-family: Montserrat, Helvetica Neue, sans-serif;
				margin-top: 30px;
				margin-left: 20px;
				width: 95%;
				color: white;
				background-color: #1abc9c;
			}
			.lightblue{
				color: #1abc9c;
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
			input[type=submit]{
				background-color:white;
				color: #1abc9c;
				text-align: right;
				border: 0px;
				font-size: 20px;
				padding: 10px 15px;
				text-transform: uppercase;
			}
			input[type=submit]:hover{
				background-color: #e1e1e1;
				color: #1abc9c;
				-webkit-transition: background-color 0.9s ease-out;
			}
			.right{
				text-align: center;
			}
		</style>
		
	</head>
<body>
<?php 
	require('connect.php');
	$username=$_SESSION['username'];
	$q30="SELECT u1,u2,u3,u4,u5,u6,u7,u8,u9,u10,t1,username FROM quizuser WHERE username='$username'";
	$r30=mysqli_query($con, $q30);
	$row=mysqli_fetch_array($r30);
	if((empty($row['u1'])&&empty($row['u2'])&&empty($row['u3'])&&empty($row['u4'])&&empty($row['u5'])&&empty($row['u6'])&&empty($row['u7'])&&empty($row['u8'])&&empty($row['u9'])&&empty($row['u10']))&&($row['t1']!='1'))
	{
		$u1=mt_rand(10000, 100000);
		$u2=mt_rand(10000, 100000);
		$u3=mt_rand(10000, 100000);
		$u4=mt_rand(10000, 100000);
		$u5=mt_rand(10000, 100000);
		$u6=mt_rand(10000, 100000);
		$u7=mt_rand(10000, 100000);
		$u8=mt_rand(10000, 100000);
		$u9=mt_rand(10000, 100000);
		$u10=mt_rand(10000, 100000);
	}
	else
	{
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
	}
	//echo $n1.'<br/>'.$n2.'<br/>'.$n3.'<br/>'.$n4.'<br/>'.$n5.'<br/>';
	$link1='http://u8130180.nettech.net.in/quiz/fbtask1.php?uid='.$u1.'&username='.$username;
	$link2='http://u8130180.nettech.net.in/quiz/fbtask1.php?uid='.$u2.'&username='.$username;
	$link3='http://u8130180.nettech.net.in/quiz/fbtask1.php?uid='.$u3.'&username='.$username;
	$link4='http://u8130180.nettech.net.in/quiz/fbtask1.php?uid='.$u4.'&username='.$username;
	$link5='http://u8130180.nettech.net.in/quiz/fbtask1.php?uid='.$u5.'&username='.$username;
	$link6='http://u8130180.nettech.net.in/quiz/fbtask1.php?uid='.$u6.'&username='.$username;
	$link7='http://u8130180.nettech.net.in/quiz/fbtask1.php?uid='.$u7.'&username='.$username;
	$link8='http://u8130180.nettech.net.in/quiz/fbtask1.php?uid='.$u8.'&username='.$username;
	$link9='http://u8130180.nettech.net.in/quiz/fbtask1.php?uid='.$u9.'&username='.$username;
	$link10='http://u8130180.nettech.net.in/quiz/fbtask1.php?uid='.$u10.'&username='.$username;

	//echo $link1.'<br/>'.$link2.'<br/>'.$link3.'<br/>'.$link4.'<br/>'.$link5.'<br/>';
	$feed="UPDATE quizuser SET u1='$u1',u2='$u2',u3='$u3',u4='$u4',u5='$u5',u6='$u6',u7='$u7',u8='$u8',u9='$u9',u10='$u10',t1='1' WHERE username='$username'";
	mysqli_query($con, $feed);
	$feed1="SELECT u1,u2,u3,u4,u5,u6,u7,u8,u9,u10 FROM quizuser WHERE username='$username'";
	$res1=mysqli_query($con, $feed1);
	$row=mysqli_fetch_array($res1);
	$ans1=$row['u1'];
	$ans2=$row['u2'];
	$ans3=$row['u3'];
	$ans4=$row['u4'];
	$ans5=$row['u5'];
	$ans6=$row['u6'];
	$ans7=$row['u7'];
	$ans8=$row['u8'];
	$ans9=$row['u9'];
	$ans10=$row['u10'];
?>
<h1>Get 10 Facebook Likes</h1>
<h3>Now, It's time for our first task!</h3><p> In This task, we give you 10 Links to get Facebook likes. Send these links to your Friends on Facebook, Twitter, Pinterest etc. and then Ask your friends to visit the links and Hit 'LIKE' which will count as a like for you. When you get 10 likes, click the 'Task Complete' button scores you points. This Question carries a staggering 100 Points.</p>
<p><em>Unique Links</em> for you are generated as follows:</p> 
	<form action="tas1.php" method="POST">
	<table>
		<tr>
			<td>Link 1 :</td>
			<td class="link"><?php if($u1!='') echo $link1; else echo 'Like Received'?></td>
		</tr>
		<tr>
			<td>Link 2 :</td><td class="link"><?php if($u2!='') echo $link2; else echo 'Like Received'?></td>
		</tr>
		<tr>
			<td>Link 3 :</td><td class="link"><?php if($u3!='') echo $link3; else echo 'Like Received'?></td></tr>
		<tr><td>Link 4 :</td><td class="link"><?php if($u4!='') echo $link4; else echo 'Like Received'?></td></tr>
		<tr><td>Link 5 :</td><td class="link"><?php if($u5!='') echo $link5; else echo 'Like Received'?></td></tr>
		<tr><td>Link 6 :</td><td class="link"><?php if($u6!='') echo $link6; else echo 'Like Received'?></td></tr>
		<tr><td>Link 7 :</td><td class="link"><?php if($u7!='') echo $link7; else echo 'Like Received'?></td></tr>
		<tr><td>Link 8 :</td><td class="link"><?php if($u8!='') echo $link8; else echo 'Like Received'?></td></tr>
		<tr><td>Link 9 :</td><td class="link"><?php if($u9!='') echo $link9; else echo 'Like Received'?></tr>
		<tr><td>Link 10 :</td><td class="link"><?php if($u10!='') echo $link10; else echo 'Like Received'?></td></tr>
	</table>
		<p class="right">
		<input type="hidden" value="100" name="qno"/>
		<input type="hidden" value="1" name="ans"/>
		<input type="submit" value="Task Complete" name="submit"/>
		</p>
	</form>
	<p class="bold foot">Created by Aditya Purandare, Krishna Srivastava &amp; Mansi Jain</p>

</body>
</html>