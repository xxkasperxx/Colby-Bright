<?php
$query = mysql_query("SELECT * FROM about");
$query_row=mysql_fetch_array($query);
echo "Welcome, Colby!<a href='logout.php'> Logout</a><br>";
$directions = "<h3>Directions:</h3>To edit text, simply click in one of the boxes you wish to change.<br> Delete/change the current text to what you desire.<br> Press update and the update will be automatically sent to the Live Site!<br><br><br>";
	
echo $directions;
?>