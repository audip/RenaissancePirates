<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <style type="text/css">
    body{
                font-size: 15px;
                font-family: Montserrat, Helvetica Neue, sans-serif;
                margin-top: 30px;
                margin-left: 30px;
                width: 100%;
                color: white;
                background-color: #8e44ad;
            }
            .underline{
                text-decoration: underline;
            }
            h1{
                text-align: center;
                font-style: italic;
            }
            #code, pre{
	            margin: 50px auto;
            }
            .vid, body{
	            margin: 10px 30px 10px 30px;
	            width: 95%;
            }
            .vid{
	            text-align: center;
            }
            input[type=submit]{
				background-color:white;
				color: #8e44ad;
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
			.foot{
				background-color: rgba(0,0,0,0.4);
				color: white;
				padding: 5px auto;
				margin: 0px auto;
			}
    </style>

    <title></title>
</head>

<body>
    <h1>Inspirational Video Question</h1>
<?php
	require('connect.php');
	if($_POST)
	{
		$clue1=mysqli_real_escape_string($con, $_POST['clue1']);
		$clue2=mysqli_real_escape_string($con, $_POST['clue2']);
		$clue=strtolower($clue1).strtolower($clue2);
		//echo $clue.'abcdef';
		$username=$_SESSION['username'];
		$str1="SELECT q35, score, username FROM quizuser WHERE username='$username'";
		$res=mysqli_query($con, $str1);
		$row=mysqli_fetch_assoc($res);
		//echo $clue.'<br/>'.$score.'<br/>'.$row['q35'];
		//die();
		if($row['q35']=='0' && $clue=='economicspolitics')
		{
			$score=$row['score']+50;
			echo 'Correct Answer. Redirecting to Home Page';
			$q1="UPDATE quizuser SET q35='1', score='$score' WHERE username='$username'";
			//echo $q1;die();
			mysqli_query($con, $q1);
			header('refresh:3;home.php');
		}
		else{
			echo '<span class="underline">Incorrect Answer / Already Answered</span>';
		}
	}
?>
    <p>'The Journey of Biggest Failure in College', Bill Gates talks about His experience which will motivate you to be a Better Graduate(Engineer), Here you can learn from his experience when to seek and opportunity and How you should not let it go by Seizing it when there is time. We want you to be a better engineer and it's our sincere effort to guide you in the Right Direction</p>
    
    <p>Pirate, you must watch this video and Answer the Question at the bottom of this page. Hit Subscribe to Our Eclectika Channel(Optional)</p>
	<div class="vid">
	<iframe width="70%" height="80%" src="//www.youtube.com/embed/iADTpgRXYrk" frameborder="0" allowfullscreen autohide="1"></iframe>

<p><span class="underline">Ques.</span> What all did Bill Gates learn at Harvard?</p>

<form action="video.php" name="videoform" method="post"><p><span class="underline">Ans.</span>New ideas in <input type="text"  size="20" maxlength="20" name="clue1" required="required"/> and <input type="text"  size="20" maxlength="20" name="clue2" required="required"/><br/><br/>
	<input type="submit" value="Answer!"/>
</p></form>

</div>
<script src="src/jquery.js"></script>
<script>
	$('#videoform').submit(function(event){
		event.preventDefault();
		$.ajax({
			type: 'POST',
			url : 'video.php',
			data : 'clue1='+clue1+'&clue2='+clue2 
		});
	});
</script>
</body>
</html>
<?php include('foot.php'); ob_flush();?>