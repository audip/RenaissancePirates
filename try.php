<?php
		$date = strtotime(date('Y-m-d H:s'));
		echo $date;?>
<?php 

if($_POST)
{
		$key_value = "KEYVALUE"; 
		$plain_text = $_POST['data']; 
		//$encrypted_text = mcrypt_ecb(MCRYPT_DES, $key_value, $plain_text, MCRYPT_ENCRYPT); 
		$encrypted_text=md5($plain_text);
		/*require('connect.php');
		$str="SELECT ans FROM questionbank WHERE qno='12'"; 
		$result=mysqli_query($con, $str);
		$row=mysqli_fetch_array($result);
		$encrypted_text=$row[0];
		
		$decrypted_text = mcrypt_ecb(MCRYPT_DES, $key_value, $encrypted_text, MCRYPT_DECRYPT); 
		echo ("<p><b> Text after decryption : </b>"); 
		echo ( $decrypted_text ); */
}
?> 

<html>
		<head>
			<title>Milind's Encryption Panel</title>
			<link rel="stylesheet" href="css/style.css" />
		</head>
		<body style="background:url(bg.jpg); color:white;margin: 50px 400px;text-align:center">
			<h1>Milind's Encryption Panel</h1>
				<form action="try.php" method="post">
						<p><label for="text">Enter Text Here:</label><input type="text" name="data" id="text" size="100"/></p>
						<p><input type="submit" value="Encrypt"/></p>
						<p>&nbsp;</p>
						<?php if(isset($encrypted_text))
						{
							echo '<p><input type="text" value="'.$encrypted_text.'" size="100"/>';
						}
						?>
				</form>
		</body>
</html>
