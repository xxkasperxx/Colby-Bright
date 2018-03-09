<?php


  $left = $_POST['leftside'];
  
  
 

	echo "Welcome, !<a href='logout.php'> Logout</a><br>";
	$ex = '<iframe width="420" height="315" src="http://www.youtube.com/embed/gxIaKO1j6So" frameborder="0" allowfullscreen></iframe>';
	$directions = "<h3>Directions:</h3>To edit text, simply click in the box and add the text to add a new video! <br>Please follow the example put in the textbox for you!<br> Click save to save your change. <br> Once you press save, the update will be sent automatically to the Live Site!<br>";
	
	$connect = mysql_connect("colbybrightmusic.db.8356999.hostedresource.com","colbybrightmusic","Maxgaming88")or die("Couldnt connect to the database! Sorry.");
	mysql_select_db("colbybrightmusic") or die ("Couldnt find table Database. Sorry");
 
	$query = mysql_query("SELECT * FROM interviews");
	$query_row=mysql_fetch_array($query);

	
	
	
	

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php echo ($directions);?>

<div class="column one">
<form method="POST" action="insertInterview.php">

Update Section: <br/> 
                <textarea name="insertInterviews" rows="10" cols="80"><?php echo $ex; ?></textarea><br><br>
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
