<?php
require_once('solvemedialib.php');
require('connect.php');
//include the Solve Media library
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Renaissance Pirates | Admin Panel </title>
    <style type="text/css">
/*<![CDATA[*/
    .font,p,footer,header,li,h1,h2,h3,h4,h5,h6{
    font-family:Merienda;
    }
    body{
        font-family: Merienda, Helvetica Neue, sans-serif;
        color: white;
    }
    .wrapper{
    width:100%;
    }
    li{
    display:inline;
    margin-left:3%;
    }
    .header{
    width:99%;
    color:white;
    padding:0.1% 0%;
    margin-top:2%;
    font-size:18px;
    background-size:cover;
    text-align:center;
    background: rgba(0, 0, 0, 0.5);
    }
    .contact{
    width:99%;
    float:left;

    }
    .right{
    width:12%;
    float:right;
    margin-right:2%;
    margin-top:1%;
    font-size:18px;
    text-align:left;
    background-color:blue;
    }

    .footer{
    width:99%;
    clear:both;
    font-size:18px;
    background-size:cover;
    text-align:center;
    background: rgba(0, 0, 0, 0.5);

    }
    .content{
    margin-top: 40px;
    width:99%;
    font-size:18px;
    color:white;
    text-align:center;
    }
    .table{
    text-align:left;
    color:#999;
    }
    td{
    color:white;
    }
    input[type=submit]{
        background-color: #e74c3c;
        border: 0px;
        padding: 10px 20px;
        color: white;
        font-size: 20px;
        font-family: Merienda, Helvetica Neue, sans-serif;
    }
    input[type=submit]:hover{
        cursor: pointer;
        background-color: #3498db;
        font-family: Merienda, Helvetica Neue, sans-serif;
        -webkit-transition: background-color 0.4s ease-out;
    }
    /*]]>*/
    </style>
</head>

<body style="background-image:url(bg.jpg);background-size:cover;height:100%;width:100%; background-attachment:fixed; font-family:Merienda;">
    <div id="wrapper">
        <div id="header" class="header">
            <ul>
                <li><a href="adminhome.php" style="text-decoration:none; color:white">Home</a></li>

                <li><a href="#" style="text-decoration:none; color:white;">Online Events</a></li>

                <li><a href="#" style="text-decoration:none; color:white;">Accomodation</a></li>

                <li><a href="#" style="text-decoration:none; color:white;">Events</a></li>

                <li><a href="logout.php" style="text-decoration:none; color:white;">Logout</a></li>
            </ul>
        </div>

