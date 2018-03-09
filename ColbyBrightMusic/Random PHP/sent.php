<?php
session_start();
if($_SESSION['username'])
{
	$connect = mysql_connect("colbybrightmusic.db.8356999.hostedresource.com","colbybrightmusic","Maxgaming88")or die("Couldnt connect to the database! Sorry.");
	mysql_select_db("colbybrightmusic") or die ("Couldnt find table Database. Sorry");
	
	
	$left = $_POST['leftside'];


	$result = mysql_query('UPDATE about SET left= "$left" WHERE id = "1"');


	if (!$result) {
	die('Invalid query: ' . mysql_error());
	}
}
else 
	die ("You must be logged in!");
 


?>