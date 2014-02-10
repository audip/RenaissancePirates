<?php
require 'php-sdk/src/facebook.php';
$facebook = new Facebook(array(
  'appId' => '302979109716651',
  'secret' => '4b69bf1ef5fc8c95712da40728c9eab3',
  'cookie' => true,	
));

/*header('https://www.facebook.com/dialog/oauth?
    client_id=302979109716651
   &redirect_uri=http://eclectika.org/quiz/home.php');*/
  // Include facebook SDK file

$user = $facebook->getUser();
if ($user) {
  try {
    $user_profile = $facebook->api('/me');
  	    $fbid = $user_profile['id'];           // To Get Facebook ID
 	    $fbuname = $user_profile['username'];  // To Get Facebook Username
 	    $fbfullname = $user_profile['name'];    // To Get Facebook full name
  } catch (FacebookApiException $e) {
    error_log($e);
   $user = null;
  }
}
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl(array(
		 'next' => 'http://eclectika.org/logout.php',  // Logout URL full path
		));
} else {
 $loginUrl = $facebook->getLoginUrl(array(
		'scope'		=> 'email', // Permissions to request from the user
		));
}
?>
