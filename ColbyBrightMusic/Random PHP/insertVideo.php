<?php
session_start();
//if($_SESSION['username'])
//{
	$connect = mysql_connect("colbybrightmusic.db.8356999.hostedresource.com","colbybrightmusic","Maxgaming88")or die("Couldnt connect to the database! Sorry.");
	mysql_select_db("colbybrightmusic") or die ("Couldnt find table Database. Sorry");
	
	
	$videoArea = $_POST['insertVideo'];
if ($videoArea!="")
{
		$sql    = "INSERT into videos VALUES('null','$videoArea')";
		$qury  = mysql_query($sql);
		echo "Video update sucessfull!<a href='http://www.colbybrightmusic.com/videos.php'>Click here to see your update!</a>";
}else

		
	if(!$qury)
		echo mysql_error();
	else
	{
		echo "Successfully Inserted<br />";
		echo "<a href='music.php'>View Result</a>";
	}
/*}
else 
	die ("You must be logged in!");
 */


?>

