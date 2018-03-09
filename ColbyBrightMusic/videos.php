<?php
session_start();
include("config.php");
$query = mysql_query("SELECT * FROM videos");


if (isset($_SESSION['loggedin'])&&isset($_SESSION['username']))
 {
 echo "<a href='logout.php'> Log-out!</a>";
?>
		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Colby Bright Music</title>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript">        
        $(function() {
            $("#loading-overlay").hide();
        });
    </script>
<!--[if IE ]>
<link href="css/ie.css" type="text/css" rel="stylesheet" />
<![endif]-->
<!-- Browser Icon -->
	   <link rel="shortcut icon" href="favicon.ico" >
	   <!-- End browser Icon -->
		</head>


	<body id="sector1">
<div id="loading-overlay">Loading...</div>
		<div id="logo">
			<div class="c">C</div>
			<div class="olby">olby</div>
			<div class="b">B</div>
			<div class="right">right</div>
		</div>
		<!-- Black Menu -->
		<div id="menu_wrapper" class="black">
		<div class="left"></div>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="takeoff.html">Takeoff Season</a></li>
				<li><a href="music.php">Music</a></li>
				<li><a href="shows.php">Shows</a></li>
				<li><a href="interview.php">Interviews</a></li>
				<li><a href="store.html">Store</a></li>
				<li><a href="contact.html">Contact</a></li>

			</ul>
		</div>
			<!--<iframe width="420" height="315" src="http://www.youtube.com/embed/m6N6vbdqqxY" frameborder="0" allowfullscreen></iframe>-->
			<div class="videos">
				<form method="POST" action="videos.php">

					<textarea name="insertVideo" rows="10" cols="80"><?php echo $ex; ?></textarea><br>
					<input type="submit" value="Insert Video" />
					
				</form>
			</div>
		
</body>
</html>

<?php
 }else
{
 ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Colby Bright Music</title>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript">        
        $(function() {
            $("#loading-overlay").hide();
        });
    </script>
<!--[if IE ]>
<link href="css/ie.css" type="text/css" rel="stylesheet" />
<![endif]-->
<!-- Browser Icon -->
	   <link rel="shortcut icon" href="favicon.ico" >
	   <!-- End browser Icon -->
		</head>


	<body id="sector1">
<div id="loading-overlay">Loading...</div>
		<div id="logo">
			<div class="c">C</div>
			<div class="olby">olby</div>
			<div class="b">B</div>
			<div class="right">right</div>
		</div>
		<!-- Black Menu -->
		<div id="menu_wrapper" class="black">
		<div class="left"></div>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="takeoff.html">Takeoff Season</a></li>
				<li><a href="music.php">Music</a></li>
				<li><a href="shows.php">Shows</a></li>
				<li><a href="interview.php">Interviews</a></li>
				<li><a href="store.html">Store</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
			<!--<iframe width="420" height="315" src="http://www.youtube.com/embed/m6N6vbdqqxY" frameborder="0" allowfullscreen></iframe>-->
			<div class="videos">
				<?php 
						while($row = mysql_fetch_array($query)) 
						{
							echo $row['videoArea']; 
							echo "<br>";
						}  
					?>
			</div>
		
</body>
</html>
	
<?php
}
	$videoArea = $_POST['insertVideo'];
if (isset($videoArea))
{
		$sql    = "INSERT into videos VALUES('null','$videoArea')";
		$qury  = mysql_query($sql);
		echo "Video update sucessfull!<a href='http://www.colbybrightmusic.com/videos.php'>Click here to see your update!</a>";
}

	if (!$result) {
	
	}else
	{
		
		echo "<b>Update Sucessfull! Click"."<a href='http://www.colbybrightmusic.com/test.php'> here</a>"." to view your update!</b>";

	} 
?>


