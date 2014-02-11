<?php
require('connect.php');
if(isset($_POST['ans']) && isset($_POST['submit'])){
	$ans = $_POST['ans'];
	$ans=trim(preg_replace('/\s+/','', $ans));
	$ans=str_replace(' ', '', $ans);
	$ans=str_replace('-', '', $ans);
	$ans=str_replace('_', '', $ans);
	$ans=strtolower($ans);
	$qno = $_POST['qno'];
	$username = $_SESSION['username'];
	//echo $ans;
	$str = "SELECT ans, points FROM questionbank WHERE qno = '$qno'";
	$result = mysqli_query($con, $str);
	$row = mysqli_fetch_array($result);

	if($ans == $row['ans'])
	{
		$s2 = "SELECT * FROM quizuser WHERE username = '$username'";
		$r2 = mysqli_query($con,$s2);
		$row1 = mysqli_fetch_array($r2);
		$scr = $row1['score'] + $row['points'];

		$i=1;
		while($i<=12)
		{
			$qno='q'.$i;
			if($row[$qno]=== '2')
				{
					$i++;
					break;
				}
			$i++;
		}

		$s1 = "UPDATE quizuser SET score='$scr', q$qno='1' WHERE username='$username'";
		echo '<br/><strong>Correct Answer</strong>';
		//echo $s1;die();
		//mysqli_query($con,$s1);
	}
}
?>
<form action="home.php" method="POST">
<?php

if($_GET){
	$q=$_GET['q'];
	require('connect.php');
	$q21="SELECT * FROM questionbank WHERE qno='$q'";
	$r21=mysqli_query($con, $q21);
	$row=mysqli_fetch_array($r21);
	$ques=$row['ques'];
	echo '<p style="margin-top:10px">
			<label for="ans" class="capital big bold" style="text-decoration:underline;margin: 10px auto;">'.$row['qdesc'].'</label>
			<img src="'.$row['image'].'" alt="Eclectika Online Game Image"  width="100%" class="topbottom"/>
            <span class="bold underline">Ques.</span> '.$ques.'<br/>
			<label for="ans" class="bold underline">Key (Answer):</label>
			<input type="hidden" value='.$q.' name = "qno" />
			<input type="text" maxlength="50" name="ans" id="ans" required="required"/>
			<br/><br/><input type="submit" value="Submit" name="submit"/>
			</p>';
}
?>
</form>