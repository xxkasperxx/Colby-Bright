<?php

 session_start();
  $left = $_POST['leftside'];
 
//if($_SESSION['username'])
//{
	echo "Welcome, ".$_SESSION['username']."!<a href='logout.php'> Logout</a><br>";
	$ex = 'asd test';
	$directions = "<h3>Directions:</h3>To edit text, simply click in the box and add the text to add a new video! <br>Please follow the example put in the textbox for you!<br> Click save to save your change. <br> Once you press save, the update will be sent automatically to the Live Site!<br>";
	
	$connect = mysql_connect("colbybrightmusic.db.8356999.hostedresource.com","colbybrightmusic","Maxgaming88")or die("Couldnt connect to the database! Sorry.");
	mysql_select_db("colbybrightmusic") or die ("Couldnt find table Database. Sorry");
 
	$query = mysql_query("SELECT * FROM shows");
	$query_row=mysql_fetch_array($query);

	
	
	
	
/*}
else
	die("You must be logged in! <a href='http://www.colbybrightmusic.com/admin.php'>Log-In</a>");*/
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php echo ($directions);?>

<div class="column one">
<form method="POST" action="insertShows.php">

Update Section: <br/> 
                <textarea name="date" rows="1" cols="80"><?php echo $ex; ?></textarea><br><br>
				<textarea name="time" rows="1" cols="80"><?php echo $ex; ?></textarea><br><br>
				<textarea name="location" rows="1" cols="80"><?php echo $ex; ?></textarea><br><br>
				<textarea name="address" rows="1" cols="80"><?php echo $ex; ?></textarea><br><br>
				<textarea name="price" rows="1" cols="80"><?php echo $ex; ?></textarea><br><br>
				<input type="submit" value="Finished" />
</form>
<p><a href="http://www.colbybrightmusic.com/member.php">Return to edit selection</a>
</div>
<!--
<form action='sent.php' method='POST'>
		Home-Right-Side: <input type='textarea' cols="30" rows="20" name='rightside'>
		<input type='submit' value='Log In'>
	</form>-->

</body>
</html>
