<?php
	include("config.php");
	$interviews = $_POST['insertInterviews'];
	$videos = $_POST['insertVideo'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$location = $_POST['location'];
	$address = $_POST['address'];
	$price = $_POST['price'];
	$music = $_POST['insertMusic'];
	
if (isset($interviews))
{
	$query = mysql_query("SELECT * FROM interviews");
	$query_row=mysql_fetch_array($query);
	
	if ($interviews!="")
	{
		$sql    = "INSERT into interviews VALUES('null','$interviews')";
		$qury  = mysql_query($sql);
		
		if ($qury)
		{
			echo "update sucessfull";
		}
		
	}
}// end insert interviews
	
if (isset($videos))
{
		$videoArea = $_POST['insertVideo'];
if ($videoArea!="")
{
	$sql    = "INSERT into videos VALUES('null','$videoArea')";
	$qury  = mysql_query($sql);
	echo "Video update sucessfull!<a href='http://www.colbybrightmusic.com/videos.php'>Click here to see your update!</a>";
}
			if(!$qury)
	echo mysql_error();
	
}// end insert videos
	
if (isset($date))
{
	$sql    = "INSERT into shows (date,time,location,address,price) VALUES('$date','$time','$location','$address','$price')";
	$qury  = mysql_query($sql);
}// end insert shows
	
if (isset($music))
{
	$musicArea = $_POST['insertMusic'];
	


	$sql     = "INSERT into music VALUES('null','$musicArea')";
	$qury  = mysql_query($sql);
	echo "update sucessfull";
}// end insert music


	
	?>