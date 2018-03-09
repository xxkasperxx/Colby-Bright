<?php
session_start();
include("config.php");
?>
<html>
<?php	
	if ($_POST)
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username&&$password)
		{
		 

			$query2 = mysql_query("SELECT * FROM users WHERE username='$username'");



		 
			$numrows = mysql_numrows($query2); 
		 
			 if ($numrows!=0)	// code to login
			{
			
				while ($row = mysql_fetch_assoc($query2))
				{
				
					$dbusername = $row['username'];
					$dbpassword = $row['password'];
				
				}
				
				// check to see if the match!
				if($username==$dbusername&&$password==$dbpassword)
				{
				
					$_SESSION['loggedin'] = TRUE;
					$_SESSION['username'] = $username;
				
					
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
						<li><a href="index.php">Home</a></li>
						<li><a href="music.php">Music</a></li>
						<li><a href="videos.php">Videos</a></li>
						<li><a href="shows.php">Shows</a></li>
						<li><a href="interview.php">Interviews</a></li>
					</ul>
				</div>
					<div class="aboutUpdate">
																	<!-------------------- CHANGE HERE ----------------------------------------->
						<ul>
						<?php echo "Welcome, " . $username . "!" ?>
						<p> Please click a link to view that page, and update it! You can also use the nav bar!</p>
						<li><a href="index.php">Home</a></li>
						<li><a href="music.php">Music</a></li>
						<li><a href="videos.php">Videos</a></li>
						<li><a href="shows.php">Shows</a></li>
						<li><a href="interview.php">Interviews</a></li>
					</ul>
					</div>
						
									
			</body>
			</html>
					

					




					<?php
				}else
				{
	
					?>
					<html>
						<p>Incorrect password!</p>
						<form action='admin.php' method='POST'>
							Username:<input type='text' name='username'><br>
							Password:<input type='password' name='password'><br>
							<input type='submit' value='Log In'>
						</form>
					</html>
				<?php
				}
		

	
			
			}else
			{

				?>
				<html>
					<p>Incorrect username!</p>
					<form action='admin.php' method='POST'>
						Username:<input type='text' name='username'><br>
						Password:<input type='password' name='password'><br>
						<input type='submit' value='Log In'>
					</form>
				</html>
				<?php
			}
		}else
		{

				?>
			<html>
				<p>Please enter a username/password</p>
				<form action='admin.php' method='POST'>
					Username:<input type='text' name='username'><br>
					Password:<input type='password' name='password'><br>
					<input type='submit' value='Log In'>
				</form>
			</html>
		<?php
		}
 
	}else
	{
		?>
		<p>Please enter a username/password</p>
		<form action='admin.php' method='POST'>
			Username:<input type='text' name='username'><br>
			Password:<input type='password' name='password'><br>
			<input type='submit' value='Log In'>
		</form>
<?php 
	}

?>	
</html>