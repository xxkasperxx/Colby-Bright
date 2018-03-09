<?php include("config.php"); $query = mysql_query("SELECT * FROM about"); $query_row=mysql_fetch_array($query); ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

  <title>Colby Bright Music</title>
<link href="css/main.css" type="text/css" rel="stylesheet" >
<!--[if IE ]>
<link href="css/ie.css" type="text/css" rel="stylesheet" >
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
				<li><a href="all_or_nothing.html">All or Nothing</a></li>
				<li><a href="music.php">Music</a></li>
				<li><a href="videos.php">Videos</a></li>
				<li><a href="shows.php">Shows</a></li>
				<li><a href="interview.php">Interviews</a></li>
				<li><a href="store.html">Store</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
			<div class="text">
				<img src="images/small_pic.jpg"  width="50%" align="left" alt="" >
				<p><?php echo($query_row[leftside]); ?>"</p>
			</div>
				<div class="news">
					<h2>News</h2>
						<a href="http://www.megaupload.com/?d=ME6YOLZA"><img src="images/all_or_nothing.bmp"width="50%" border="0" alt=""></a>
						<div class="release">
							<p><a href="http://www.megaupload.com/?d=ME6YOLZA">DOWNLOAD All or Nothing Mixtape</a></p></div>
						<p><?php echo($query_row[rightside]); ?></p>
							<h3><br >
								<a target="_blank" href="http://www.facebook.com/ColbyBright"><img src="images/facebook-logo.png" width="30%" alt="" border="none"></a>
								<a target="_blank" href="http://twitter.com/colbybright"><img src="images/twitter-logo.png" width="30%" alt="" border="none" ></a>
								<a target="_blank" href="http://www.reverbnation.com/colbybright"><img src="images/reverb.png" width="30%" alt="" border="none" ></a>
								<div class="youtube"><a target="_blank" href="http://www.youtube.com/user/ColbyBrightMusic"><img border="0" src="images/Youtube_logo.png" width="50%" alt=""></a></div>
							</h3><br >
								<h4>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

								</h4>
				</div>
					
						
		
</body>
</html>
