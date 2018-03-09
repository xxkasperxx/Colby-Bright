<?php

 session_start();
  $left = $_POST['leftside'];
 
//if($_SESSION['username'])
//{
	echo "Welcome, ".$_SESSION['username']."!<a href='logout.php'> Logout</a><br>";
	$directions = "<h3>Directions:</h3>To edit text, simply click in one of the boxes you wish to change.<br> Click save to save your change. <br> Once you press save, the update will be sent automatically to the Live Site!<br>";
	
	$connect = mysql_connect("colbybrightmusic.db.8356999.hostedresource.com","colbybrightmusic","Maxgaming88")or die("Couldnt connect to the database! Sorry.");
	mysql_select_db("colbybrightmusic") or die ("Couldnt find table Database. Sorry");
 
	$query = mysql_query("SELECT * FROM music");
	$query_row=mysql_fetch_array($query);

	echo $directions;
	
	
	
//}
//else
	//die("You must be logged in!");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body>



<div class="column one">
<form method="POST" action="insert.php">

Update Section: <br/> 
                <textarea name="insertMusic" rows="10" cols="80"><?php echo($query_row[musicArea]); ?></textarea><br><br>
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
