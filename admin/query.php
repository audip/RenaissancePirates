<?php

	include('connect.php');

	//$query="UPDATE quizuser SET q101='0'";
	//$query="UPDATE questionbank SET ques='He was a major Italian poet of the Middle Ages. His Divine Comedy is widely considered the greatest literary work composed in the Italian language and a masterpiece of world literature. Name his autobiography?' WHERE qno='29'";
	//$query="UPDATE questionbank SET qdesc='Find Us the Dimensions', ques='Follow this link to <a href=\"http://www.marriott.com/hotels/travel/bombr-renaissance-mumbai-convention-centre-hotel/\" target=\"_blank\">Hotel Renaissance, Mumbai</a> and Locate the details of Lotus Conference Room (Numbers Only and in sequence)', ans='c2b3b143e8daff3ce3fc6302c4df6f66' WHERE qno='31'";
	//$query="UPDATE quizuser SET t1='1',u1='',u2='',u3='',u4='',u5='',u6='',u7='',u8='',u9='',u10='',score='610', q100='1' WHERE username='ankit mishra'";
	$query="UPDATE quizuser SET q101='0' WHERE username='ayush_1'";
	//$query="UPDATE quizuser SET q31='2',q32='2',q33='2',q34='2',q35='2'";
	//$query="ALTER TABLE quizuser ADD q35 varchar(2)";
	echo $query.'<br/>';
	mysqli_query($con, $query);
	echo '<br/>Query Ran Successfully';
?>
<html>
abcd
</html>