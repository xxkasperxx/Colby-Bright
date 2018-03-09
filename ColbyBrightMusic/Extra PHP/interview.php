<?php include("config.php"); $query = mysql_query("SELECT * FROM interviews"); $query_row=mysql_fetch_array($query); ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <title>Colby Bright Music</title>
<link href="css/main.css" type="text/css" rel="stylesheet" >
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
			<li><a href="index.php">Home</a></li>
				<li><a href="all_or_nothing.html">All or Nothing</a></li>
				<li><a href="music.php">Music</a></li>
				<li><a href="videos.php">Videos</a></li>
				<li><a href="shows.php">Shows</a></li>
				<li><a href="store.html">Store</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
			
				<p><?php 
						while($row = mysql_fetch_array($query)) 
						{
							echo $row['interviewArea']; 
							echo "<br>";
						}  
					?>
				</p>
			
				
					
						
		
</body>
</html>
