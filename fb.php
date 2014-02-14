<?php
require_once('facebook.php');

$facebook = new Facebook(array(
  'appId' => '302979109716651',
  'secret' => '4b69bf1ef5fc8c95712da40728c9eab3',
  'cookie' => true,	
));

try{
	$me=$facebook->api('/me');
	}
catch (FacebookApiException $e){
	error_log($e);
}
function getFacebookImageFromURL($url)
{
  $headers = get_headers($url, 1);
  if (isset($headers['Location']))
  {
    return $headers['Location'];
  }
}
$i=1;
//print_r($me);
if($facebook->getUser())
{
$fbid=$me['id'];
$url = "https://graph.facebook.com/$fbid/picture?type=large&redirect=true";
$imageURL = getFacebookImageFromURL($url);
//echo $imageURL.$me['id'];
$fbname=$me['first_name'].' '.$me['last_name'];
//echo $fbname;
$fbemail=$me['email'];
$fbusername=strtolower($me['first_name']).'.'.strtolower($me['last_name']);
//echo $fbusername;
$fbgender=ucfirst($me['gender']);
$i++;
}
if($i==2)
{
	//header('location:reg.php');
}


?>
      