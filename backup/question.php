<?php
require('connect.php');
if(isset($_POST['ans']) && isset($_POST['submit'])){
	$ans = mysqli_real_escape_string($con, $_POST['ans']);
	$ans=trim(preg_replace('/\s+/','', $ans));
	$ans=str_replace(' ', '', $ans);
	$ans=str_replace('-', '', $ans);
	$ans=str_replace('_', '', $ans);
	$ans=str_replace(',', '', $ans);
	$ans=str_replace('&', '', $ans);
	$ans=strtolower($ans);
	$qno = $_POST['qno'];
	$username = $_SESSION['username'];
	//echo $ans;
	$str = "SELECT ans, points FROM questionbank WHERE qno = '$qno'";
	$result = mysqli_query($con, $str);
	$row = mysqli_fetch_array($result);
	$s2 = "SELECT * FROM quizuser WHERE username = '$username'";
	$r2 = mysqli_query($con,$s2);
	$row1 = mysqli_fetch_assoc($r2);
	$qnum='q'.$qno;
	$s3="SELECT $qnum FROM quizuser WHERE username='$username'";
	$r3=mysqli_query($con, $s3);
	$rw=mysqli_fetch_array($r3);
	//echo 'String='.$s3.'<br/>'.$rw[0];
	
	/*Debugging Module Starts from here*/
	/*echo 'Answer='.$ans.'<br/>DB answer='.$row['ans'].'<br/>Question Number='.$qnum.'<br/>';
	if($ans == $row['ans']){echo 'Answers match';}else{echo 'Answers dont match';}
	echo '<br/>String Compare Result'.strcmp($ans, $row['ans']);
	die();*/
	/*Debugging Module ends here*/
	
	if($rw[0]=== '1')
	{
		echo '<strong>Already Answered</strong><br/>';
		echo '<em>Please proceed to another question..</em>';
	}
	else
	{
		if($ans == $row['ans'])
		{
			$scr = $row1['score'] + $row['points'];
			$i=1;
			while($i<=30)
			{
				$qno1='q'.$i;
				if($row1[$qno1]=== '2')
				{
					break;
				}
				$i++;
			}
			$s1 = "UPDATE quizuser SET score='$scr', q$qno='1', q$i='0' WHERE username='$username'";
			echo '<br/><strong>Correct Answer</strong>';
			//echo $s1;die();
			mysqli_query($con,$s1);
			header('refresh:2;home.php');
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<head>

    <style type="text/css">
        .clue{
    font-weight: bold;
    font-size: larger;
    font-variant: small-caps;
    }
    #q1{
    width: 98%;
    }
    </style>

    <title></title>
</head>

<body>
    <div id="q1">
        <form action="home.php" method="post">
            <?php

if($_GET){
	$q=$_GET['q'];
	require('connect.php');
	$q21="SELECT * FROM questionbank WHERE qno='$q'";
	$r21=mysqli_query($con, $q21);
	$row=mysqli_fetch_array($r21);
	$ques=$row['ques'];
	echo '<p style="margin: 10px auto;text-align:center;">
                        <label for="ans" class="capital big bold" style="text-decoration:underline;margin: 10px auto;">'.$row['qdesc'].'<br/>('.$row['points'].'Points)</label><br/>';
                        if($row['image']!="")
                        {
                        			echo '<img src="'.$row['image'].'" alt="Eclectika Online Game Image" width="80%" class="topbottom"/>';
                        	}
                       echo '<br/>
                        <span class="bold underline">Ques.</span> '.$ques.'<br/>
                        <label for="ans" class="bold underline">Key (Answer):</label>
                        <input type="hidden" value='.$q.' name = "qno" />
                        <input type="text" maxlength="50" name="ans" id="ans" required="required"/>
                        <br/><br/><input type="submit" value="Submit" name="submit" id="submit"/>
                        </p>';
}
?>
        </form>
    </div>
</body>
</html>
