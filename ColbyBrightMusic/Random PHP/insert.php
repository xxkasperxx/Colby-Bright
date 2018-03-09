<?php
session_start();
//if($_SESSION['username'])
//{
	$connect = mysql_connect("colbybrightmusic.db.8356999.hostedresource.com","colbybrightmusic","Maxgaming88")or die("Couldnt connect to the database! Sorry.");
	mysql_select_db("colbybrightmusic") or die ("Couldnt find table Database. Sorry");
	
	
	$musicArea = $_POST['insertMusic'];
	


	$sql     = "INSERT into music VALUES('null','$musicArea')";
	$qury  = mysql_query($sql);
 
	if(!$qury)
		echo mysql_error();
	else
	{
		echo "Successfully Inserted<br />";
		echo "<a href='show.php'>View Result</a>";
	}
/*}
else 
	die ("You must be logged in!");
 */


?>