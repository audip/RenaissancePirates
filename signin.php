<?php
    session_start();
    ob_start();
    $flag=0;
    require('connect.php');
    $users=array("riya.kedia15@gmail.com","yash mittal","deepesh","snavin321","devesh23","rakesh.roushan","bharat.chandak","rath","AAMEN","A2","ankit.sahu","rahul.shrivastava","prince","aninditak","abhi_007","nikhil.markandeya","sai sudheshna.rompally","ritvikareddy18","akshay.baxi","bhargav","Upendra.Sahu","amit01","jaydeep.rusia");
    $count=count($users);
       /*if(isset($_SESSION['username']))
    {
	    	$username=$_SESSION['username'];
	    	$q11="SELECT otp FROM stuinfo WHERE username='$username'";
	    	$r11=mysqli_query($con,$q11);
	    	$row=mysqli_fetch_array($r11);
	    	$otp=$row['otp'];
	    	if($otp='')
	    	{
		    	$link='<a href="http://eclectika.org/quiz/verify.php?otp='.$otp.'">VERIFY EMAIL ADDRESS</a>';
			 //Resend verification mail
		    	//die();
	    	}
    }*/
    if(!isset($_SESSION['username']))
    {
        header('location:login.php');
    }
    else
    {
        //Proceed with Game Home
        $username=$_SESSION['username'];
         for($i=0;$i<$count;$i++)
		 {
			    if($username==$users[$i])
			    {
			    		$flag=1;
					break;
				}
		}
        if($flag==1)
        {
	        $q0="INSERT INTO quizuser VALUES(
	        '', '$username', '1080','0',
	        '0','1',
	        '','','','','','','','','','',
	        '1','1', '1', '1',
	        '1','1', '1', '1',
	        '1','1', '1', '1',
	        '1','1', '1', '1',
	        '1','1', '1', '1',
	        '1','1', '1', '1',
	        '1','1', '1', '1',
	        '1','1', '0', '1',
	        	'2', '2','2', '2',
	        	'0'
	        	)";
        }
		else{
	        
        
        $q0="INSERT INTO quizuser VALUES(
        '', '$username', '0','0',
        '0','0',
        '','','','','','','','','','',
        '0','0', '0', '0',
        '2', '2','2','2',
        	'2','2','2','2',        
        	'2', '2','2','2',
        '2', '2','2','2',
        	'2', '2','2','2',
        	'2', '2','2','2',
        	'2', '2','2','2',
        	'2', '2','2', '2',
        	'0', '0'
        	)";
        //echo $q0;
        //die();
        }
        mysqli_query($con, $q0);
        $q01="UPDATE stuinfo SET status='1' WHERE username='$username'";
        mysqli_query($con, $q01);
        $_SESSION['status']='1';
        header('location:home.php');
    }
ob_flush();
?>