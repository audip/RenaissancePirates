<?php

	include('connect.php');

	$query="UPDATE quizuser SET q101='0'";
	//$query="UPDATE questionbank SET ques='He was a major Italian poet of the Middle Ages. His Divine Comedy is widely considered the greatest literary work composed in the Italian language and a masterpiece of world literature. Name his autobiography?' WHERE qno='29'";
	//$query="UPDATE questionbank SET qdesc='Identify the Autobiography',ans='844cd3444b2673d1ab0110141e7ffd78' WHERE qno='29'";
	//$query="UPDATE quizuser SET t1='1',u1='',u2='',u3='',u4='',u5='',u6='',u7='',u8='',u9='',u10='',score='610', q100='1' WHERE username='ankit mishra'";
	//$query="UPDATE quizuser SET score='1005' WHERE username='A2'";
	//$query="UPDATE quizuser SET t2='0',q101='0'";
	echo $query.'<br/>';
	mysqli_query($con, $query);
	echo '<br/>Query Ran Successfully';
?>
<html>
abcd
</html>