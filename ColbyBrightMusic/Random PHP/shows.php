
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	 $connect = mysql_connect("colbybrightmusic.db.8356999.hostedresource.com","colbybrightmusic","Maxgaming88")or die("Couldnt connect to the database! Sorry.");
		mysql_select_db("colbybrightmusic") or die ("Couldnt find table Database. Sorry");
 
	$query = mysql_query("SELECT * FROM shows");
	//$query_row=mysql_fetch_array($query);
	
	
	
	

	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Colby Bright Music</title>
<link href="css/main.css" type="text/css" rel="stylesheet" />
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
				<li><a href="all_or_nothing.html">All or Nothing</a></li>
				<li><a href="music.html">Music</a></li>
				<li><a href="videos.html">Videos</a></li>
				<li><a href="shows.html">Shows</a></li>
				<li><a href="interview.html">Interviews</a></li>
				<li><a href="store.html">Store</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
			
			
				<table  width="100%" border="0"  >
				
					<colgroup class="cities" />
					<colgroup span="4" class="dates" />
						<col span="4">
						<col class="totals">
					</colgroup>
						
						<tr>	
							<td><h6>Date</h6></td>
							<td><h6>Time</h6></td>
							<td><h6>Location</h6></td>
							<td><h6>Address</h6></td>
							<td><h6>Price</h6></td>
						</tr>	
							<tbody>
								
						
									 
											<p> test</p>
											<form method="POST" action="shows.php">
													
													
															<textarea name="date" rows="1" cols="80"><?php echo $ex; ?></textarea>
														
														
															<textarea name="location" rows="1" cols="80"><?php echo $ex; ?></textarea>
														
															<textarea name="address" rows="1" cols="80"><?php echo $ex; ?></textarea>
														
															<textarea name="price" rows="1" cols="80"><?php echo $ex; ?></textarea>
														
															<input type="submit" value="Finished" />
													
											</form>
											 
											
										
								
								
							
								
								
							</tbody>
						
		
				
			
				
					
						
		
</body>
</html>
