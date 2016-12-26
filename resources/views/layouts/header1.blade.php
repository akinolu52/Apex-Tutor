<?php
    $username = "Username";
    $gold = '1';
    $silver = '5';
    $bronze = '14';
    $points = '750';
?>
<!DOCTYPE html>
<html>
<headlang="en">
    <meta charset="UTF-8">
    <link href="css/base.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    
    <link href="css/metro-schemes.css" rel="stylesheet">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/prettify/run_prettify.js"></script>
    <script src="js/ga.js"></script>

    <script type="text/javascript" src="js/timer.js"></script>
    <script type="text/javascript" src="js/base.js"></script>
    <script type="text/javascript" src="js/jquery.progressTimer.js"></script>

    <title>Apex Learning</title>
</head>

<body>

	<div class="grid">
	    <div class="row wite uppercase" style=" font-weight:bold;" >
	        
	           <img src="img/APEX_Learning Logo_WHITE.png" style="height:150px; padding-right:50%" alt="#logo">
               <img src="img/APEX_Learning_USER_ICON2.png" style="height:30px; padding-bottom:10px;"> 
                    <font style="font-size:20px;">
                        <?= $username .' </font><font size="+3" style="font-weight:bold">'. $points; ?>
                    </font>
	           <img src="img/GOLD_MEDAL.png" style="height:30px; padding-bottom:5px; padding-left:1.12%"> <?= $gold; ?>
               <img src="img/SILVER_MEDAL.png" style="height:30px; padding-bottom:5px; padding-left:1.12%"> <?= $silver; ?>
               <img src="img/BRONZE_MEDAL.png" style="height:30px; padding-bottom:5px; padding-left:1.12%;"> <?= $bronze; ?>
               <a href="#"><img src="img/LOGOUT_ICON.png" style="height:30px; padding-bottom:10px padding-left:30px" ></a>
	    </div>
	</div>