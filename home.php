<?php
session_start();
require('connect.php');
//$_SESSION['username']='aditya';
//echo $_SESSION['username'];
//die();

if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
else
{
	//Proceed with Game Home
}
?>

<html>
<head>
    <title>Renaissance Pirates | Home</title>
     <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen,projection">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css' />
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="120;home.php"/>
    <meta name="keywords" content="Eclectika 2014, Treasure Hunt, Eclectika, Online Game, Pre-Eclectika Event">
    <meta name="author" content="Aditya Purandare http://plus.google.com/+AdityaPurandare,
            Krishna Mohan Srivastava https://plus.google.com/112976571750925733219, Mansi Jain mansijain.nitrr@gmail.com">
    <meta name="robots" content="noindex,nofollow">
    <meta name="google" content="notranslate"><!--Dublin Core Start=-->
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
    <meta name="DC.Title" content="Treasure Hunt Home">
    <meta name="DC.Title" content="Eclectika Online Game">
    <meta name="DC.Creator" content="Aditya Purandare">
    <meta name="DC.Creator" content="Krishna Mohan Srivastava">
    <meta name="DC.Creator" content="Mansi Jain">
    <meta name="DC.Subject" content="Eclectika's Online Game for creating a buzz & fever amongst Students ">
    <meta name="DC.Description" content="Pre-Eclectika Event, launched just before Eclectika for Rampaging an Eclectika Fever in Raipur & vicinity.">
    <meta name="DC.Publisher" content="Team Eclectika">
    <meta name="DC.Date" content="2014-01">
    <meta name="DC.Type" content="InteractiveResource">
    <meta name="DC.Language" content="en">
    <meta name="DC.Coverage" content="India"><!--Dublin Core End-->
</head>

<body>
    <div class="wrapper">
        <div id="header" style="float:left">
            <?php include('header.php');   ?>
        </div>

        <div id="container" name="container">
        		<a href="container"></a>
            <?php include('container.php');
?>
        </div>

        <footer><?php include('footer.php'); ?></footer>
    </div>
    <script src="src/jquery.js" ></script>
    <script>
	    (function(){
            $('button').click(function(e){
                e.preventDefault();
                var id=$(this).attr("id");
                //console.log(id);
                $.ajax({
                    type: 'GET',
                    url: 'question.php',
                    data: 'q='+id,
                    success: function(data){
                        if(data != null) $("#main_content").html(data)
                        }
                        });
            });
        })();
    </script>
    <script>
	    (function(){
            $('#submit').click(function(e){
                e.preventDefault();
               //$("#questionpanel").load('quespanel.php');
               $('meta').attr('content','2;home.php');           
            });
        })();
    </script>

</body>
</html>
<?php include_once("analyticstracking.php") ?>