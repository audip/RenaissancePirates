
    <div id="quespanel" style="float:left">
        <?php include('quespanel.php'); ?>
    </div>

    <div id="main_content" style="float:left">
<!--We display the question and submit button here-->
      <?php include('main_content.php');
require('connect.php');
if(isset($_POST['ans']) && isset($_POST['submit']) && !empty($_POST['ans'])){
	$ans = $_POST['ans'];
	$ans=trim($ans);
	$ans = strtolower($ans);
	$qno = $_POST['qno'];
	$username = $_SESSION['username'];
	echo 'Correct Answer';

	$str = "SELECT ans, points FROM questionbank WHERE qno = '$qno'";
	$result = mysqli_query($con, $str);
	$row = mysqli_fetch_array($result);

	if($ans === $row['ans'])
	{
		//echo 'ans matched';die();
		$s2 = "SELECT score FROM quizuser WHERE username = '$username'";
		$r2 = mysqli_query($con,$s2);
		$row1 = mysqli_fetch_array($r2);
		$scr = $row1['score'] + $row['points'];
		
		$i=3;
		$flag = 0;
		$count = 1;
		while($row[$i]=='0' || $row[$i]=='1')
		{
				$i++;
				$count++;
		}
		$qup='q'.$count;
		
		echo $qup;die();
		//echo $scr.' '.$row1['score'].' '.$row['points'];
		$s1 = "UPDATE quizuser SET score='$scr', q$qno='1', $qup='0' WHERE username='$username'";
		echo $s1;die();
		mysqli_query($con,$s1);
	}
}

?>
    </div>

    <div id="leaderboard" style="float:left">
        <?php include('ranklist.php'); ?>
    </div>
