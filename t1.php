 <html>
 <div id="quespanel" style="float:left">
        
	        <table id="ques" align="center" cellpadding="4">
<?php
	require('connect.php');
	//$username=$_SESSION['username'];
	$username="aditya";
	$q12="SELECT * FROM quizuser WHERE username='$username'";
	$r12=mysqli_query($con, $q12);
	$i=1;
	$row=mysqli_fetch_array($r12);
	while($i<=10)
	{
		$qno='q'.$i;
		if($row[$qno]==='0' || $row[$qno]==='1')
		{echo '<tr>
						<td class="disguise" onClick="question('.$i.');">
						Question'.$i.'
						</td>';
						if($row[$qno]==='1')
							echo '<td>&#10003;</td>';
						else
							echo '<td>&nbsp;</td>';
		echo	'</tr>';
		}
		//
		/*if($row['q'.$i.]=='0')
		{
			echo 
		}*/
		$i++;
	}
?>
</table>
<img src="img/panel_footer.png" alt="" />
	        
        
    </div>
<div id="content">

</div>
 <input type="button" id="btnLoad" value="Load" />
  <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script>
	$(".disguise").click(function(){

    $.ajax({
        type: 'POST',
        url: 'page1.php',
        success: function(data){
                 if(data != null) $("#content").text(data)
         }
     });
});
</script>
 </html>