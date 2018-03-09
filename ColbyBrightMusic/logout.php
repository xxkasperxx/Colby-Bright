<?php
 session_start();
 
 session_unset(); 

 //destroy the session 
 session_destroy(); 
 ?>
 	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
			  <title>Colby Bright Music</title>
			<link href="css/main.css" type="text/css" rel="stylesheet" />
			<link href="css/admin.css" type="text/css" rel="stylesheet" />
			<!--[if IE ]>
			<link href="css/ie.css" type="text/css" rel="stylesheet" />
			<![endif]-->
					<!-- Browser Icon -->
				  <link rel="shortcut icon" href=".\favicon.ico">
				   <!-- End browser Icon -->
			</head>
			



			<body id="sector1">

					
				<!-- Black Menu -->
				<div id="menu_wrapper" class="black">
				<div class="left"></div>
					<ul id="menu">
						<li><a href="takeoff.html">Takeoff Season</a></li>
						<li><a href="music.html">Music</a></li>
						<li><a href="videos.html">Videos</a></li>
						<li><a href="shows.html">Shows</a></li>
						<li><a href="interview.html">Interviews</a></li>
						<li><a href="store.html">Store</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
					<div class="aboutUpdate">
						<p>You've been logged out. Click <a href='admin.php'> here</a> to return to login page!</p>
					</div>
						
									
			</body>
			</html>
 
 <?
 //echo "You've been logged out. Click <a href='admin.php'> here</a> to return";
 
 
 ?>