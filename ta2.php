<?php
ob_start();
require('connect.php');
session_start();
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
				background-color:#336E7B;
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
				color: #336E7B;
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
			.inputForm
			{
				-moz-border-radius:10px; /* Firefox */
				-webkit-border-radius: 5px; /* Safari, Chrome */
				-khtml-border-radius: 10px; /* KHTML */
				border-radius: 10px; /* CSS3 */
				behavior:url("border-radius.htc");
			}
			strong{
				font-variant: small-caps;
			}
			input[type=text]
			{
				text-align: center;
				text-transform: uppercase;
			}
		</style>
		
	</head>
<body>
<h1>Crack The Code!</h1>
<?php 
	require('connect.php');
	if($_POST)
	{
	$username=$_SESSION['username'];
	if(isset($_POST['ans']))
	{
		$ans=mysqli_real_escape_string($con, $_POST['ans']);
		$ans = strtolower($ans);
		//echo $ans;
		$str="SELECT score, t2 FROM quizuser WHERE username='$username'";
		$result=mysqli_query($con, $str);
		$row=mysqli_fetch_array($result);
		$score=$row['score']+75;
		//echo $ans.'<br/>'.$row['t2'];
		if($ans == "dragons" && $row['t2']=='0')
		{
			$str = "UPDATE quizuser SET q101='1', t2='1', score='$score' WHERE username='$username'";
			mysqli_query($con,$str);
			echo 'Correct Answer.<br/> Redirecting you to Pirate Home in 3 seconds.';
			header('refresh:3;home.php');
		}
		else echo "Incorrect Answer / Already Answered";
	}
}
?>
<p>In this Task, we have given 5 questions to be solved by you, Fill an 'Alphabet Only' in all the boxes given to you. The boxes which are circled have the answer alphabet. Find all the circled letters and unjumble them to get the answer. The 'Answer' Box is the only one that gives us the answer and  besides that, all boxes are for rough work by the pirate, Typing in them in <u>not</u> neccessary.</p>
<p>Answer all the FIVE questions.</p>
<table style="width:90%;">
	<form action="ta2.php" method="post">
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td>1.</td>
		<td>Synonym of the word <strong>"Hackneyed"</strong>,<br/> which has 4th Letter 'T'</td>
		<td>
			<input type="text" size="1" maxlength="1" />
			<input type="text" size="1" maxlength="1" class="inputForm"/>
			<input type="text" size="1" maxlength="1" />
			<input type="text" size="1" maxlength="1" value="T" readonly="readonly"/>
			<input type="text" size="1" maxlength="1"/>
		</td>
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td>2.</td>
		<td>Antonym of the word <strong>"Acquisition"</strong>,<br/>which has last letter 'H'</td>
		<td>
			<input type="text" size="1" maxlength="1" class="inputForm"/>
			<input type="text" size="1" maxlength="1" />
			<input type="text" size="1" maxlength="1" />
			<input type="text" size="1" maxlength="1" />
			<input type="text" size="1" maxlength="1" />
			<input type="text" size="1" maxlength="1" value="H" readonly="readonly" />
		</td>
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td>3.</td>
		<td>Arrange all letters of the word <strong>"Honorificabilitudinitatibus"</strong> in alphabetical order</td>
		<td>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"class="inputForm"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"class="inputForm"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"class="inputForm"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
		</td>
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td>4.</td>
		<td>Plain word <strong>"RENAISSANCE"</strong>,<br/>Cryptographed word is :</td>
		<td>
			<input type="text" size="1" maxlength="1" readonly="readonly" value="X"/>
			<input type="text" size="1" maxlength="1" readonly="readonly" value="K" />
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1" class="inputForm"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1" readonly="readonly" value="G"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1" readonly="readonly" value="K"/>
		</td>
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td>5.</td>
		<td>A <a href="http://en.wikipedia.org/wiki/Fibonacci_number" target="_blank">Fibbonaci series</a> goes like 0 1 1 2.. What is the seventh digit of this series?</td>
		<td>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1" class="inputForm"/>
			<input type="text" size="1" maxlength="1"/>
			<input type="text" size="1" maxlength="1"/>
		</td>
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td colspan="2">ANSWER</td>
		<td>
			<input type="text" name="ans" size="20" maxlength="7" required="required" />	
		</td>
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td colspan="2">&nbsp;</td>
		<td>
			<input type="Submit" required="required" name="submit" value="Crack it!"/>		
		</td>
	</tr>
	</form>
</table>
</body>
</html>